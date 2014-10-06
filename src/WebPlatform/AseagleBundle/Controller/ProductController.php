<?php

namespace WebPlatform\AseagleBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\Product;
use Doctrine\DBAL\DriverManager;

class ProductController extends Controller
{
    public function indexAction()
    {
        return array(
                // ...
            );
    }

    public function uploadAction(Request $request)
    {
        // $_POST parameters
        $cat_id = $request->request->get('category_id');

        //get current user
        $user = $this->getUser();
        //$id = $user->getId();
        //create & save product
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('AseagleBundle:Category')->find($cat_id);
        $owner = $em->getRepository('AseagleBundle:User')->find(1);

        //$string_col = 'owner_id,';
        //$string_val = '1,';
        //foreach ($_POST as $key=>$value){
        //    if (!empty($value) && !is_array($value)){
        //        $string_col .= $key.',';
        //        $string_val .= '"'.$value.'",';
        //    }
        //}
        //if (!empty($string_col)){
        //    $string_col = substr($string_col,0,strlen($string_col)-1);
        //    $string_val = substr($string_val,0,strlen($string_val)-1);
        //}
        //$temp = "INSERT INTO product(".$string_col.") values(".$string_val.")";
        //$query = $em->createQuery($temp);
        //$products = $query->getResult();

        $product = new Product();
        $product->setCategory($cat);
        $product->setOwner($owner);
        if($request->request->get('title') != ""){
            $product->setTitle($request->request->get('title'));
        }
        if($request->request->get('brief_description') != ""){
            $product->setBriefDescription($request->request->get('brief_description'));
        }
        if($request->request->get('specification') != ""){
            $product->setSpecification($request->request->get('specification'));
        }
        if($request->request->get('min_order') != ""){
            $product->setMinOrder($request->request->get('min_order'));
        }
        if($request->request->get('min_order_unit_type') != ""){
            $product->setMinOrderUnitType($request->request->get('min_order_unit_type'));
        }
        if($request->request->get('price_currency') != ""){
            $product->setPriceCurrency($request->request->get('price_currency'));
        }
        if($request->request->get('price_origin') != ""){
            $product->setPriceOrigin($request->request->get('price_origin'));
        }
        if($request->request->get('price_unit_type') != ""){
            $product->setPriceUnitType($request->request->get('price_unit_type'));
        }
        if($request->request->get('port') != ""){
            $product->setPort($request->request->get('port'));
        }
        if($request->request->get('payment_terms') != ""){
            $product->setPaymentTerms($request->request->get('payment_terms'));
        }
        if($request->request->get('supply_ability') != ""){
            $product->setSupplyAbility($request->request->get('supply_ability'));
        }
        if($request->request->get('supply_applity_unit') != ""){
            $product->setSupplyAbilityUnit($request->request->get('supply_applity_unit'));
        }
        if($request->request->get('supply_ability_per_time') != ""){
            $product->setSupplyAbilityPerTime($request->request->get('supply_ability_per_time'));
        }
        if($request->request->get('deliver_time') != ""){
            $product->setDeliverTime($request->request->get('deliver_time'));
        }
        if($request->request->get('packaging') != ""){
            $product->setPackaging($request->request->get('packaging'));
        }
        if($request->request->get('product_detail_1') != ""){
            $product->setProductDetail1($request->request->get('product_detail_1'));
        }
        if($request->request->get('product_detail_2') != ""){
            $product->setProductDetail2($request->request->get('product_detail_2'));
        }
        if($request->request->get('product_detail_3') != ""){
            $product->setProductDetail3($request->request->get('product_detail_3'));
        }
        if($request->request->get('product_detail_4') != ""){
            $product->setProductDetail4($request->request->get('product_detail_4'));
        }
        if($request->request->get('product_detail_5') != ""){
            $product->setProductDetail5($request->request->get('product_detail_5'));
        }
        if($request->request->get('product_detail_6') != ""){
            $product->setProductDetail6($request->request->get('product_detail_6'));
        }
        if($request->request->get('product_detail_7') != ""){
            $product->setProductDetail7($request->request->get('product_detail_7'));
        }
        if($request->request->get('product_detail_8') != ""){
            $product->setProductDetail8($request->request->get('product_detail_8'));
        }
        if($request->request->get('product_detail_9') != ""){
            $product->setProductDetail9($request->request->get('product_detail_9'));
        }
        if($request->request->get('product_detail_10') != ""){
            $product->setProductDetail10($request->request->get('product_detail_10'));
        }
        if($request->request->get('product_detail_11') != ""){
            $product->setProductDetail11($request->request->get('product_detail_11'));
        }
        if($request->request->get('product_detail_12') != ""){
            $product->setProductDetail12($request->request->get('product_detail_12'));
        }
        if($request->request->get('product_detail_13') != ""){
            $product->setProductDetail13($request->request->get('product_detail_13'));
        }
        if($request->request->get('product_detail_14') != ""){
            $product->setProductDetail14($request->request->get('product_detail_14'));
        }
        if($request->request->get('product_detail_15') != ""){
            $product->setProductDetail15($request->request->get('product_detail_15'));
        }
        if($request->request->get('product_detail_16') != ""){
            $product->setProductDetail16($request->request->get('product_detail_16'));
        }
        if($request->request->get('product_detail_17') != ""){
            $product->setProductDetail17($request->request->get('product_detail_17'));
        }
        if($request->request->get('product_detail_18') != ""){
            $product->setProductDetail18($request->request->get('product_detail_18'));
        }
        if($request->request->get('product_detail_19') != ""){
            $product->setProductDetail19($request->request->get('product_detail_19'));
        }
        if($request->request->get('product_detail_20') != ""){
            $product->setProductDetail20($request->request->get('product_detail_20'));
        }
        if($request->request->get('product_detail_21') != ""){
            $product->setProductDetail21($request->request->get('product_detail_21'));
        }
        if($request->request->get('product_detail_22') != ""){
            $product->setProductDetail22($request->request->get('product_detail_22'));
        }
        if($request->request->get('product_detail_23') != ""){
            $product->setProductDetail23($request->request->get('product_detail_23'));
        }
        if($request->request->get('product_detail_24') != ""){
            $product->setProductDetail24($request->request->get('product_detail_24'));
        }
        if($request->request->get('product_detail_25') != ""){
            $product->setProductDetail25($request->request->get('product_detail_25'));
        }
        if($request->request->get('product_detail_26') != ""){
            $product->setProductDetail26($request->request->get('product_detail_26'));
        }
        if($request->request->get('product_detail_27') != ""){
            $product->setProductDetail27($request->request->get('product_detail_27'));
        }
        if($request->request->get('product_detail_28') != ""){
            $product->setProductDetail28($request->request->get('product_detail_28'));
        }
        if($request->request->get('product_detail_29') != ""){
            $product->setProductDetail29($request->request->get('product_detail_29'));
        }
        if($request->request->get('product_detail_30') != ""){
            $product->setProductDetail30($request->request->get('product_detail_30'));
        }
        if($request->request->get('product_detail_31') != ""){
            $product->setProductDetail31($request->request->get('product_detail_31'));
        }
        if($request->request->get('product_detail_32') != ""){
            $product->setProductDetail32($request->request->get('product_detail_32'));
        }
        if($request->request->get('product_detail_33') != ""){
            $product->setProductDetail33($request->request->get('product_detail_33'));
        }
        if($request->request->get('product_detail_34') != ""){
            $product->setProductDetail34($request->request->get('product_detail_34'));
        }
        if($request->request->get('product_detail_35') != ""){
            $product->setProductDetail35($request->request->get('product_detail_35'));
        }
        if($request->request->get('product_detail_36') != ""){
            $product->setProductDetail36($request->request->get('product_detail_36'));
        }
        if($request->request->get('product_detail_37') != ""){
            $product->setProductDetail37($request->request->get('product_detail_37'));
        }
        if($request->request->get('product_detail_38') != ""){
            $product->setProductDetail38($request->request->get('product_detail_38'));
        }
        if($request->request->get('product_detail_39') != ""){
            $product->setProductDetail39($request->request->get('product_detail_39'));
        }
        if($request->request->get('product_detail_40') != ""){
            $product->setProductDetail40($request->request->get('product_detail_40'));
        }


        $em->persist($product);
        $em->flush();

        return new Response(json_encode(array('result'=>'ok')),200,array('Content-Type'=>'application/json'));
    }

    public function showAction($id)
    {
        $mapping_helper = $this->get('mapping_helper');
        $product = $this->getDoctrine()->getRepository('AseagleBundle:Product')->find($id);
        $product_info = array(
            //'id' => $product->getId(),
            //'n' => $product->getTitle(),
            //'pr' => $product->getPrice(),
            //'m_o' => $product->getMinOrderQuantity(),
            //'port' => $product->getPort(),
            //'pay' => $product->getPaymentTerms(),
            //'d' => $mapping_helper->mapping_products_in_category($product)
        );
        return $this->render('AseagleBundle:Product:show.html.twig', $product_info);
    }


    public function editAction()
    {
        return array(
                // ...
            );
    }

}
