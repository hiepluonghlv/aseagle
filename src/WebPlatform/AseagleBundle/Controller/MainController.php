<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction()
    {
        //$cat_list = $this->getDoctrine()->getRepository('AseagleBundle:Category')->findBy(array(), array('lft' => 'ASC'));
        //$parents = $this->getDoctrine()->getRepository('AseagleBundle:Category')->findBy(array('parentId' => null), array('id' => 'ASC'));
        //self::get_cat_tree($parents, $cat_tree);
        return $this->render('AseagleBundle:Main:index.html.twig', array('name' => 'asd'));
    }

    public function left_side_barAction(Request $request)
    {
        $category_id = $request->get('category_id');
        $cat_list = self::get_cat_lr_tree($category_id);
        $country_list = self::get_country($category_id);
        $filter_list =self::get_filter($category_id);
        $left_side_bar = ['current_cat_id' => $category_id, 'country' => $country_list, 'cat' => $cat_list, 'filter' => $filter_list];
        return new Response(json_encode($left_side_bar),200,array('Content-Type'=>'application/json'));
    }

    private function get_filter( $category_id ){
        $filter_list = $this->getDoctrine()->getRepository('AseagleBundle:ProductDetailNameMapping')->createQueryBuilder('p')
            ->select('p.colId')
            ->leftJoin('AseagleBundle:ProductDetailDefaultValue','pv',"WITH","pv.productDetailId=p.id")
            ->where('p.catId = :category_id')
            ->groupBy('p.colId')
            ->having("sum(pv.count) > 0")
            ->setParameter('category_id', $category_id)
            ->getQuery()
            ->getResult();
        $result = [];
        foreach ($filter_list as $f){
            array_push($result,$f['colId']);
        }
        return $result;
    }

    private function get_country( $category_id ){
        $country_list = $this->getDoctrine()->getRepository('AseagleBundle:Country')->createQueryBuilder('r')
            ->select('r.id','r.count')
            ->getQuery()
            ->getResult();
        return $country_list;
    }

    private function get_cat_lr_tree( $category_id ){
        $cat_list = $this->getDoctrine()->getRepository('AseagleBundle:Category')->createQueryBuilder('c')
            ->select('c.id','c.parent_id','c.count')
            ->from('AseagleBundle:Category', 'p')
            ->where('p.id = :category_id')
            ->andWhere('c.lft BETWEEN p.lft AND p.rgt')
            ->setParameter('category_id', $category_id)
            ->getQuery()
            ->getResult();
        return $cat_list;
    }

    private function get_cat_tree( $parent_list, &$result ){
        foreach($parent_list as $parent){
           array_push($result,array('cat' => $parent, 'par' => $parent->getParent()));
            $children = $this->getDoctrine()->getRepository('AseagleBundle:Category')->findBy(array('parentId' => $parent->getId()), array('id' => 'ASC'));
            if (sizeof($children)>0){
                self::get_cat_tree($children, $result);
            }
        }
    }

    public function filterAction(Request $request)
    {
        $params = $request->query->all();
        $filter_string = '';
        foreach($params as $key => $value){
            if(is_numeric($key)){
                $pieces = explode(",", $value);
                if(count($pieces) > 0){
                    $filter_string .= ' (';
                    foreach($pieces as $pi){
                        if(is_numeric($pi)){
                            $filter_string .= " p.product_detail_".$key."=".$pi. " or";
                        }
                    }
                    $filter_string = substr($filter_string, 0, -2);
                    $filter_string .= ') ';
                }
                $filter_string .= ' and';
            }
        }
        if(!empty($filter_string)){
            $filter_string = substr($filter_string, 0, -3);
        }

        $mapping_helper = $this->get('mapping_helper');
        $category_id = $request->get('category_id');
        $page = $request->query->get('page');
        $search_string = $request->query->get('search_string');
        $country_id = $request->query->get('country');

        $products = $this->getDoctrine()->getRepository('AseagleBundle:Product')->createQueryBuilder('p')
            ->where('p.category_id = :category_id')
            ->andWhere("p.title LIKE :search_string and p.place_of_origin_id = :country_id and ".$filter_string)
            ->setParameter('category_id', $category_id)
            ->setParameter('search_string', '%'.$search_string.'%')
            ->setParameter('country_id', $country_id)
            ->getQuery()
            ->getResult();

        $mapped_products_info = array();
        foreach($products as $product)
        {
            $product_detail = array('1' => $product->getProductDetail1(),
                '2' => $product->getProductDetail2(),
                '3' => $product->getProductDetail3(),
                '4' => $product->getProductDetail4(),
                '5' => $product->getProductDetail5(),
                '6' => $product->getProductDetail6(),
                '7' => $product->getProductDetail7(),
                '8' => $product->getProductDetail7(),
                '9' => $product->getProductDetail7()
            );

            array_push($mapped_products_info, array(
                'id' => $product->getId(),
                'cat_id' => $product->getCategoryId(),
                'n' => $product->getTitle(),
                'pr' => $product->getPriceOrigin(),
                'm_o' => $product->getMinOrderQuantity(),
                'port' => $product->getPort(),
                'pay' => $product->getPaymentTerms(),
                'cmt' => $product->getComment() == null ? [] : ($product->getComment() == "" ? [] : array($product->getComment())),
                'd' => $product_detail
            ));
        }


        return new Response(json_encode($mapped_products_info),200,array('Content-Type'=>'application/json'));
    }

    public function searchAction(Request $request)
    {
        $mapping_helper = $this->get('mapping_helper');
        $category_id = $request->query->get('category_id');
        $search_string = $request->query->get('search_string');
        $sort_by = $request->query->get('sort_by');

        /*
        $products = $this->getDoctrine()->getRepository('AseagleBundle:Product')->createQueryBuilder('p')
            ->select("p.id, p.category_id as cat_id, p.title as n, p.price_origin as pr, p.min_order_quantity as m_o,
                      p.brief_description as des, p.port, p.payment_terms as pay, concat('[',COALESCE(p.comment,''),']') as cmt,
                      concat('{','\"1\"',':',COALESCE(p.product_detail_1,''),',',
                             '2',':',COALESCE(p.product_detail_2,''),',',
                             '3',':',COALESCE(p.product_detail_3,''),',',
                             '4',':',COALESCE(p.product_detail_4,''),',',
                             '5',':',COALESCE(p.product_detail_5,''),',',
                             '6',':',COALESCE(p.product_detail_6,''),',',
                             '7',':',COALESCE(p.product_detail_7,''),',',
                             '8',':',COALESCE(p.product_detail_8,''),',',
                             '9',':',COALESCE(p.product_detail_9,''),
                            '}')
                            as d
                      ")
            ->where('p.category_id = :category_id')
            ->andWhere('p.title LIKE :search_string')
            ->setParameter('category_id', $category_id)
            ->setParameter('search_string', '%'.$search_string.'%')
            ->getQuery()
            ->getResult();*/
        $products = $this->getDoctrine()->getRepository('AseagleBundle:Product')->createQueryBuilder('p')
            ->where('p.category_id = :category_id')
            ->andWhere('p.title LIKE :search_string')
            ->setParameter('category_id', $category_id)
            ->setParameter('search_string', '%'.$search_string.'%')
            ->getQuery()
            ->getResult();

        /*
        //just test
        $em = $this->getDoctrine()->getManager();
        $product_list = $em->createQuery(
            'SELECT p.title
            FROM AseagleBundle:Product p'
            )->getResult();
        */


        $mapped_products_info = array();
        foreach($products as $product)
        {
            $product_detail = array('1' => $product->getProductDetail1(),
                '2' => $product->getProductDetail2(),
                '3' => $product->getProductDetail3(),
                '4' => $product->getProductDetail4(),
                '5' => $product->getProductDetail5(),
                '6' => $product->getProductDetail6(),
                '7' => $product->getProductDetail7(),
                '8' => $product->getProductDetail7(),
                '9' => $product->getProductDetail7()
            );

            array_push($mapped_products_info, array(
                'id' => $product->getId(),
                'cat_id' => $product->getCategoryId(),
                'n' => $product->getTitle(),
                'pr' => $product->getPriceOrigin(),
                'm_o' => $product->getMinOrderQuantity(),
                'port' => $product->getPort(),
                'pay' => $product->getPaymentTerms(),
                'cmt' => array($product->getComment()),
                'd' => $product_detail
            ));
        }


        return new Response(json_encode($mapped_products_info),200,array('Content-Type'=>'application/json'));
    }

    public function get_list_products_mainAction()
    {
        $mapping_helper = $this->get('mapping_helper');
        $products = $this->getDoctrine()->getRepository('AseagleBundle:Product')->findBy(array('category_id' => '1'), array('id' => 'ASC'));
        $mapped_products_info = array();

        foreach($products as $product)
        {
            array_push($mapped_products_info, array(
                'id' => $product->getId(),
                'n' => $product->getTitle(),
                'pr' => $product->getPrice(),
                'm-o' => $product->getMinOrderQuantity(),
                'port' => $product->getPort(),
                'pay' => $product->getPaymentTerms(),
                'd' => $mapping_helper->mapping_products_in_category($product)
            ));
        }

        return new Response(json_encode($mapped_products_info),200,array('Content-Type'=>'application/json'));
    }

}
