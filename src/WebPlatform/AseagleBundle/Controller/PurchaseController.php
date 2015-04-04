<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\BuyingRequest;
use WebPlatform\AseagleBundle\Entity\PurchaseManagement;
use WebPlatform\AseagleBundle\Entity\Quotation;


class PurchaseController extends Controller
{
    public function create_buying_requestAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $buying_request = new BuyingRequest();
        $form = $this->createFormBuilder($buying_request)
            ->add('title', 'text', array('label' => 'Title:'))
            ->add('buying_request_message', 'textarea', array('label' => 'Detail:') )
            ->add('category')
            ->add('quantity', 'number', array('label' => 'Quantity:'))
            ->add('quantity_type', 'text', array('label' => 'Quantity Type:') )
            ->add('expired_date', 'date', array('label' => 'Expired Date:') )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $buying_request->setBuyer($user);
            $buying_request->setStatus('pending');
            $em->persist($buying_request);
            $em->flush();

            //send message
            $message_helper = $this->get('message_helper');
            $message_helper->sendMessage($buying_request->getCategory()->getId(),'','[Buying Request] '.$buying_request->getTitle().$buying_request->getExpiredDate()->format('Y-m-d H:i:s'),$buying_request->getBuyingRequestMessage().$buying_request->getQuantity().$buying_request->getQuantityType().$buying_request->getExpiredDate()->format('Y-m-d H:i:s'), $user, $em);

            //insert purchase management
            if($buying_request->getCategory() !== NULL){
                $receivers_in_cat = $buying_request->getCategory()->getCategoryCompanies();
                foreach ($receivers_in_cat as $com) {
                    $pm = new PurchaseManagement();
                    $pm->setCompany($com->getCompany());
                    $pm->setBuyingRequest($buying_request);
                    $em->persist($pm);
                    $em->flush();
                }
            }

            return $this->redirect($this->generateUrl('create_buying_request',array()));
        }else{
            return $this->render('AseagleBundle:Purchase:buying_request.html.twig', array(
                'form' => $form->createView()
            ));
        }

        /*
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sender = $em->getRepository('AseagleBundle:User')->find($user->getId());

        // $_POST parameters
        $cat_id = $request->request->get('category_id');
        $product_id = $request->request->get('product_id');
        $received_ids = $request->request->get('company_id');
        $title = $request->request->get('title');
        $expired_date = $request->request->get('expired_date');
        $buying_request_message = $request->request->get('buying_request_message');
        $quantity = $request->request->get('quantity');
        $quantity_type = $request->request->get('quantity_type');

        //insert buying_request
        $br = new BuyingRequest();
        $br->setBuyer($sender);
        $format_expired_date = new \DateTime($expired_date);
        $br->setExpiredDate($format_expired_date);//new \DateTime('now')
        if(!empty($cat_id)){
            $cat = $em->getRepository('AseagleBundle:Category')->find($cat_id);
            $br->setCategory($cat);
        }else{
            $br->setProductId($product_id);
            $br->setCompanyId($received_ids);
        }
        $br->setTitle($title);
        $br->setBuyingRequestMessage($buying_request_message);
        $br->setQuantity($quantity != '' ? $quantity : 0);
        $br->setQuantityType($quantity_type);
        $br->setStatus('pending');
        $em->persist($br);
        $em->flush();
        */

    }

    public function create_quotationAction(Request $request, $purchase_id)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $quotation = new Quotation();
        $form = $this->createFormBuilder($quotation)
            ->add('quote_message', 'textarea', array('label' => 'Message:') )
            ->add('product','entity', array(
                'class' => 'AseagleBundle:Product',
                'choices' => $user->getProducts(),
                'required' => false,
                'empty_data' => null,
            ))
            ->add('price', 'number', array('label' => 'Price:'))
            ->add('currency', 'text', array('label' => 'Currency:') )
            ->add('quantity', 'number', array('label' => 'Quantity:'))
            ->add('quantity_type', 'text', array('label' => 'Quantity Type:') )
            ->add('payment_term', 'text', array('label' => 'Payment Term:') )
            ->add('deliver_time', 'text', array('label' => 'Deliver Time:') )
            ->add('expired_date', 'date', array('label' => 'Expired Date:') )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $pm = $em->getRepository('AseagleBundle:PurchaseManagement')->find($purchase_id);
            $quotation->setSeller($user);
            $quotation->setPurchaseManagement($pm);
            $quotation->setIsArchived(0);
            $em->persist($quotation);
            $em->flush();

            //send message
            $message_helper = $this->get('message_helper');
            $message_helper->sendMessage('', $pm->getBuyingRequest()->getBuyerId(),'[Quote] '.$pm->getBuyingRequest()->getTitle().$pm->getBuyingRequest()->getExpiredDate()->format('Y-m-d H:i:s'),$quotation->getQuoteMessage().$quotation->getPrice().$quotation->getQuantity().$quotation->getQuantityType().$quotation->getPaymentTerm().$quotation->getDeliverTime(), $user, $em);

            return $this->redirect($this->generateUrl('create_quote',array('purchase_id'=>$purchase_id)));
        }else{
            return $this->render('AseagleBundle:Purchase:quote.html.twig', array(
                'form' => $form->createView()
            ));
        }
    }

    public function edit_quotationAction(Request $request, $purchase_id, $id)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $quotation = $em->getRepository('AseagleBundle:Quotation')->find($id);
        $form = $this->createFormBuilder($quotation)
            ->add('quote_message', 'textarea', array('label' => 'Message:') )
            ->add('product','entity', array(
                'class' => 'AseagleBundle:Product',
                'choices' => $user->getProducts(),
                'required' => false,
                'empty_data' => null,
            ))
            ->add('price', 'number', array('label' => 'Price:'))
            ->add('currency', 'text', array('label' => 'Currency:') )
            ->add('quantity', 'number', array('label' => 'Quantity:'))
            ->add('quantity_type', 'text', array('label' => 'Quantity Type:') )
            ->add('payment_term', 'text', array('label' => 'Payment Term:') )
            ->add('deliver_time', 'text', array('label' => 'Deliver Time:') )
            ->add('expired_date', 'date', array('label' => 'Expired Date:') )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $pm = $em->getRepository('AseagleBundle:PurchaseManagement')->find($purchase_id);
            $em->flush();

            //send message
            $message_helper = $this->get('message_helper');
            $message_helper->sendMessage('', $pm->getBuyingRequest()->getBuyerId(),'[Quote] '.$pm->getBuyingRequest()->getTitle().$pm->getBuyingRequest()->getExpiredDate()->format('Y-m-d H:i:s'),$quotation->getQuoteMessage().$quotation->getPrice().$quotation->getQuantity().$quotation->getQuantityType().$quotation->getPaymentTerm().$quotation->getDeliverTime(), $user, $em);

            return $this->redirect($this->generateUrl('create_quote',array('purchase_id'=>$purchase_id)));
        }else{
            return $this->render('AseagleBundle:Purchase:quote.html.twig', array(
                'form' => $form->createView()
            ));
        }
    }

    public function buyer_get_buying_requestAction(Request $request)
    {
        //get current user
        $user = $this->getUser();

        $brs_info = array();
        foreach($user->getBuyingRequests() as $br)
        {
            array_push($brs_info, array(
                'id' => $br->getId(),
                'g_id' => $br->getGroupId(),
                'c_id' => $br->getCategoryId(),
                'co_id' => $br->getCompanyId(),
                't' => $br->getTitle(),
                'm' => $br->getBuyingRequestMessage(),
                'ex_d' => $br->getExpiredDate(),
                'a' => $br->getStatus() == 0 ? 'pending' : ($br->getStatus() == 1 ? 'approved' : 'rejected'),
                'q' => $br->getQuantity(),
                'q_t' => $br->getQuantityType(),
                'quotes' => self::getQuotes($br)
            ));
        }
        return $this->render('AseagleBundle:Purchase:list_buying_request.html.twig', array('view' => 'buyer', 'brs_info' => $brs_info));
    }

    public static function getQuotes($br)
    {

        $quotes_info = array();
        foreach($br->getQuotations() as $quote)
        {
            array_push($quotes_info, array(
                'id' => $quote->getId(),
                'co_id' => $quote->getCompanyId(),
                'pr' => $quote->getPrice()
            ));
        }
        return $quotes_info;
    }

    public function seller_get_buying_requestAction(Request $request)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $pms_info = array();
        if($user->getCompany() != null){
            foreach($user->getCompany()->getPurchaseManagements() as $pm)
            {
                array_push($pms_info, array(
                    'id' => $pm->getId(),
                    'br_id' => $pm->getBuyingRequest()->getId(),
                    't' => $pm->getBuyingRequest()->getTitle(),
                    'm' => $pm->getBuyingRequest()->getBuyingRequestMessage(),
                    'ex_d' => $pm->getBuyingRequest()->getExpiredDate(),
                    'q' => $pm->getBuyingRequest()->getQuantity(),
                    'q_t' => $pm->getBuyingRequest()->getQuantityType(),
                    'my_q' => $pm->getQuotation() != null ? array(
                        'id' => $pm->getQuotation()->getId(),
                        'ex_d' => $pm->getQuotation()->getExpiredDate(),
                        'p_id' => $pm->getQuotation()->getProductId(),
                        'pr' => $pm->getQuotation()->getPrice(),
                        'p_t' => $pm->getQuotation()->getPaymentTerm(),
                        'd_t' => $pm->getQuotation()->getDeliverTime()
                    ) : null
                ));
            }
        }

        return $this->render('AseagleBundle:Purchase:list_buying_request.html.twig', array('view' => 'seller', 'brs_info' => $pms_info));
        #return new Response(json_encode($pms_info),200,array('Content-Type'=>'application/json'));
    }

    public function buyer_get_quotation_detailAction(Request $request)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $quote_id = $request->request->get('quote_id');
        $quote = $em->getRepository('AseagleBundle:Quotation')->find($quote_id);
        $result = null;
        if($quote != null){
            $result =  array(
                'id' => $quote->getId(),
                'pr_id' => $quote->getPrId(),
                'ex_d' => $quote->getExpiredDate(),
                'p_id' => $quote->getProductId(),
                'pr_t' => $quote->getBuyingRequest()->getTitle(),
                'q_m' => $quote->getQuotationMessage(),
                'pr' => $quote->getPrice(),
                'q' => $quote->getQuantity(),
                'q_t' => $quote->getQuantityType(),
                'p_t' => $quote->getPaymentTerm(),
                'd_t' => $quote->getDeliverTime()
            );

        }
        return new Response(json_encode($result),200,array('Content-Type'=>'application/json'));
    }

    public function seller_get_quotation_detailAction(Request $request)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $quote_id = $request->request->get('quote_id');
        $quote = $em->getRepository('AseagleBundle:Quotation')->find($quote_id);
        $result = null;
        if($quote != null){
            $result =  array(
                'id' => $quote->getId(),
                'pr_id' => $quote->getPrId(),
                'ex_d' => $quote->getExpiredDate(),
                'p_id' => $quote->getProductId(),
                'pr_t' => $quote->getBuyingRequest()->getTitle(),
                'q_m' => $quote->getQuotationMessage(),
                'pr' => $quote->getPrice(),
                'q' => $quote->getQuantity(),
                'q_t' => $quote->getQuantityType(),
                'p_t' => $quote->getPaymentTerm(),
                'd_t' => $quote->getDeliverTime()
            );

        }
        return new Response(json_encode($result),200,array('Content-Type'=>'application/json'));
    }

    public function buyer_get_buying_request_detailAction(Request $request)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $pr_id = $request->request->get('pr_id');
        $br = $em->getRepository('AseagleBundle:BuyingRequest')->find($pr_id);
        $result = null;
        if($br != null){
            $result =  array(
                'id' => $br->getId(),
                'ex_d' => $br->getExpiredDate(),
                'p_id' => $br->getProductId(),
                'c_id' => $br->getCategoryId(),
                'co_id' => $br->getCompanyId(),
                't' => $br->getTitle(),
                'mes' => $br->getBuyingRequestMessage(),
                'q' => $br->getQuantity(),
                'q_t' => $br->getQuantityType(),
                'a' => $br->getStatus()
            );

        }
        return new Response(json_encode($result),200,array('Content-Type'=>'application/json'));
    }

    public function seller_get_buying_request_detailAction(Request $request)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $pr_id = $request->request->get('pr_id');
        $br = $em->getRepository('AseagleBundle:BuyingRequest')->find($pr_id);
        $result = null;
        if($br != null){
            $result =  array(
                'id' => $br->getId(),
                'ex_d' => $br->getExpiredDate(),
                'p_id' => $br->getProductId(),
                'c_id' => $br->getCategoryId(),
                'co_id' => $br->getCompanyId(),
                't' => $br->getTitle(),
                'mes' => $br->getBuyingRequestMessage(),
                'q' => $br->getQuantity(),
                'q_t' => $br->getQuantityType(),
                'a' => $br->getStatus()
            );

        }
        return new Response(json_encode($result),200,array('Content-Type'=>'application/json'));
    }
}
