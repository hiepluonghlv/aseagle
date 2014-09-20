<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProductController extends Controller
{

    public function indexAction()
    {
        return array(
                // ...
            );
    }


    public function showAction($id)
    {
        $mapping_helper = $this->get('mapping_helper');
        $product = $this->getDoctrine()->getRepository('AseagleBundle:Product')->find($id);
        $product_info = array(
            'id' => $product->getId(),
            'n' => $product->getTitle(),
            'pr' => $product->getPrice(),
            'm_o' => $product->getMinOrderQuantity(),
            'port' => $product->getPort(),
            'pay' => $product->getPaymentTerms(),
            'd' => $mapping_helper->mapping_products_in_category($product)
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
