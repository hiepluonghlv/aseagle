<?php

namespace WebPlatform\AseagleBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\Product;

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
        $request->request->get('hid');

        //get current user
        $user = $this->getUser();
        //$id = $user->getId();
        //create & save product
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('AseagleBundle:Category')->find(1);
        $owner = $em->getRepository('AseagleBundle:User')->find(1);

        $product = new Product();
        $product->setTitle('A Bar');
        $product->setCategory($cat);
        $product->setOwner($owner);
        $product->setPriceOrigin('19.99');

        //$em->persist($product);
        //$em->flush();

        return new Response(json_encode(array('result'=>'abc')),200,array('Content-Type'=>'application/json'));
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
