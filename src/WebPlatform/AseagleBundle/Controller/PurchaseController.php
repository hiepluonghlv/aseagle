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

        //send message
        $message_helper = $this->get('message_helper');
        $message_helper->sendMessage($cat_id,$received_ids != '' ? 'c_'.$received_ids : $received_ids,'[Buying Request] '.$title.$expired_date,$buying_request_message.$quantity.$quantity_type.$expired_date, $sender, $em);

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

        //insert purchase management
        if(!empty($cat_id)){
            $cat = $em->getRepository('AseagleBundle:Category')->find($cat_id);
            $receivers_in_cat = $cat->getCategoryCompanies();
            foreach ($receivers_in_cat as $com) {
                $pm = new PurchaseManagement();
                $pm->setCompany($com->getCompany());
                $pm->setBuyingRequest($br);
                $em->persist($pm);
                $em->flush();
            }
        }

        return new Response(json_encode(array("result"=>"success")),200,array('Content-Type'=>'application/json'));
    }

    public function create_quotationAction(Request $request)
    {
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        // $_POST parameters
        $pr_id = $request->request->get('pr_id');
        $is_archived = $request->request->get('is_archived');
        $product_id = $request->request->get('product_id');
        $expired_date = $request->request->get('expired_date');
        $quote_message = $request->request->get('quote_message');
        $price = $request->request->get('price');
        $currency = $request->request->get('currency');
        $quantity = $request->request->get('quantity');
        $quantity_type = $request->request->get('quantity_type');
        $payment_term = $request->request->get('payment_term');
        $deliver_time = $request->request->get('deliver_time');
        $message_helper = $this->get('message_helper');

        $pr = $em->getRepository('AseagleBundle:BuyingRequest')->find($pr_id);
        $message_helper->sendMessage('', $pr->getBuyerId(),'[Quote] '.$pr->getTitle().$pr->getExpiredDate()->format('Y-m-d H:i:s'),$quote_message.$price.$quantity.$quantity_type.$payment_term.$deliver_time , $user, $em);

        //insert quotation
        $q = new Quotation();
        $q->setBuyingRequest($pr);
        $q->setSellerId($user->getId());
        if(!empty($product_id)){
            $product = $em->getRepository('AseagleBundle:Product')->find($product_id);
            $q->setProduct($product);
        }
        $q->setCompany($user->getCompany());
        $q->setIsArchived($is_archived=='1' ? true : false);
        $q->setExpiredDate(new \DateTime($expired_date));
        $q->setQuoteMessage($quote_message);
        $q->setPrice($price);
        $q->setCurrency($currency);
        $q->setQuantity($quantity != '' ? $quantity : 0);
        $q->setQuantityType($quantity_type);
        $q->setPaymentTerm($payment_term);
        $q->setDeliverTime($deliver_time);
        $em->persist($q);
        $em->flush();

        return new Response(json_encode(array("result"=>"success")),200,array('Content-Type'=>'application/json'));
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
                'ex_d' => $br->getExpiredDate(),
                'a' => $br->getStatus(),
                'q' => $br->getQuantity(),
                'q_t' => $br->getQuantityType(),
                'quotes' => self::getQuotes($br)
            ));
        }
        return $this->render('AseagleBundle:Purchase:list_buying_request.html.twig', array('brs_info' => $brs_info));
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
                    'pr_id' => $pm->getPrId(),
                    't' => $pm->getBuyingRequest()->getTitle(),
                    'ex_d' => $pm->getBuyingRequest()->getExpiredDate(),
                    'q' => $pm->getBuyingRequest()->getQuantity(),
                    'q_t' => $pm->getBuyingRequest()->getQuantityType(),
                    'my_q' => self::getQuotesForSeller($pm, $em)
                ));
            }
        }
        return new Response(json_encode($pms_info),200,array('Content-Type'=>'application/json'));
    }

    public static function getQuotesForSeller($pm, $em)
    {
        $quotes = $em->getRepository('AseagleBundle:Quotation')->findBy( array('company_id' => $pm->getCompanyId(), 'pr_id' => $pm->getPrId()));
        $quotes_info = array();
        foreach($quotes as $quote)
        {
            array_push($quotes_info, array(
                'id' => $quote->getId(),
                'ex_d' => $quote->getExpiredDate(),
                'p_id' => $quote->getProductId(),
                'pr' => $quote->getPrice(),
                'p_t' => $quote->getPaymentTerm(),
                'd_t' => $quote->getDeliverTime()
            ));
        }
        return $quotes_info;
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
