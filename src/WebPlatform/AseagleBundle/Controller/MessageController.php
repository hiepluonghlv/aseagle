<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\ContactList;
use WebPlatform\AseagleBundle\Entity\ReceivedMessage;
use WebPlatform\AseagleBundle\Entity\SentMessage;

class MessageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AseagleBundle:Message:index.html.twig');
    }

    public function sendingAction(Request $request)
    {
        // $_POST parameters
        $cat_id = $request->request->get('category_id');
        //get current user
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sender = $em->getRepository('AseagleBundle:User')->find($user->getId());

        //create & save sentmessage
        $sent_message = new SentMessage();
        $sent_message->setSender($sender);

        $receivers_in_cat = null;
        if(!empty($cat_id)){
            $cat = $em->getRepository('AseagleBundle:Category')->find($cat_id);
            $receiver_list = '';
            if($cat != null){
                $receivers_in_cat = $cat->getCategoryCompanies();
                foreach ($receivers_in_cat as $com) {
                    $receiver_list .=  !empty($receiver_list) ? ','.'c_'.$com->getId() : 'c_'.$com->getId();
                }
            }
            $sent_message->setReceiverIds($receiver_list);
        }else if($request->request->get('received_ids') != ""){
            $sent_message->setReceiverIds($request->request->get('received_ids'));
        }
        if($request->request->get('subject') != ""){
            $sent_message->setSubject($request->request->get('subject'));
        }
        if($request->request->get('body') != ""){
            $sent_message->setBody($request->request->get('body'));
        }
        $sent_message->setDate(new \DateTime('now'));
        $sent_message->setIsDraft(false);
        $em->persist($sent_message);
        $em->flush();

        //add contact list
        //create & save receivedmessage
        //send to entire category
        if(!empty($cat_id)){
            foreach ($receivers_in_cat as $com) {
                $staff = $com->getStaffs();
                foreach ($staff as $s) {
                    $received_message = new ReceivedMessage();
                    $received_message->setAuthor($sender);
                    $received_message->setReceiver($s);
                    if($request->request->get('subject') != ""){
                        $received_message->setSubject($request->request->get('subject'));
                    }
                    if($request->request->get('body') != ""){
                        $received_message->setBody($request->request->get('body'));
                    }
                    $received_message->setDate(new \DateTime('now'));
                    $received_message->setIsRead(false);
                    $received_message->setIsStar(false);
                    $em->persist($received_message);
                    $em->flush();
                }
                //save Contacts
                $check = $em->getRepository('AseagleBundle:ContactList')->findOneBy(array('user_id' => $sender->getId() ,'contact_id' => $com->getId(), 'is_company' => true));
                if($check == null){
                    $contact = new ContactList();
                    $contact->setUser($sender);
                    $contact->setIsCompany(true);
                    $contact->setContactId($com->getId());
                    $em->persist($contact);
                    $em->flush();
                }
            }
        }else{
            //send to company & user
            $received_ids = explode(",", $request->request->get('received_ids'));
            foreach ($received_ids as $value) {
                if(strpos($value,'c') !== false){
                    $com = $em->getRepository('AseagleBundle:CompanyProfile')->find(explode("_", $value)[1]);
                    foreach ($com->getStaffs() as $s) {
                        $received_message = new ReceivedMessage();
                        $received_message->setAuthor($sender);
                        $received_message->setReceiver($s);
                        if($request->request->get('subject') != ""){
                            $received_message->setSubject($request->request->get('subject'));
                        }
                        if($request->request->get('body') != ""){
                            $received_message->setBody($request->request->get('body'));
                        }
                        $received_message->setDate(new \DateTime('now'));
                        $received_message->setIsRead(false);
                        $received_message->setIsStar(false);
                        $em->persist($received_message);
                        $em->flush();
                    }
                    //save Contacts
                    $check = $em->getRepository('AseagleBundle:ContactList')->findOneBy(array('user_id' => $sender->getId() ,'contact_id' => $com->getId(), 'is_company' => true));
                    if($check == null){
                        $contact = new ContactList();
                        $contact->setUser($sender);
                        $contact->setIsCompany(true);
                        $contact->setContactId($com->getId());
                        $em->persist($contact);
                        $em->flush();
                    }
                }else{
                    $receiver = $em->getRepository('AseagleBundle:User')->find(intval($value));
                    $received_message = new ReceivedMessage();
                    $received_message->setAuthor($sender);
                    $received_message->setReceiver($receiver);
                    if($request->request->get('subject') != ""){
                        $received_message->setSubject($request->request->get('subject'));
                    }
                    if($request->request->get('body') != ""){
                        $received_message->setBody($request->request->get('body'));
                    }
                    $received_message->setDate(new \DateTime('now'));
                    $received_message->setIsRead(false);
                    $received_message->setIsStar(false);
                    $em->persist($received_message);
                    $em->flush();

                    //save Contacts
                    $check = $em->getRepository('AseagleBundle:ContactList')->findOneBy(array('user_id' => $sender->getId() ,'contact_id' => $receiver->getId()));
                    if($check == null){
                        $contact = new ContactList();
                        $contact->setUser($sender);
                        $contact->setContactId($receiver->getId());
                        $em->persist($contact);
                        $em->flush();
                    }
                }
            }
        }
        return new Response(json_encode(array("result"=>"success")),200,array('Content-Type'=>'application/json'));
    }

    public function listMailAction($receiver_id, Request $request)
    {
        $search_str = $request->query->get('search_str');
        $is_read = $request->query->get('is_read');
        $is_star = $request->query->get('is_star');
        $is_task = $request->query->get('is_task');
        $sender = $request->query->get('sender');
        $sort_by_sender = $request->query->get('sort_by_sender');
        $sort_by_date = $request->query->get('sort_by_date');
        $page = $request->query->get('page');

        /*
        $messages = $this->getDoctrine()->getRepository('AseagleBundle:ReceivedMessage')->createQueryBuilder('m')
            ->where("m.user_id = ".$receiver_id." ".($sender != "" ? " and m.author_id = ".$sender : "")
                .($search_str != "" ? " and m.subject LIKE '%".$search_str."%'" : "")
                .($is_read != "" ? ( $is_read == "true" ? " and m.is_read = 1" : " and m.is_read = 0") : "" )
                .($is_star != "" ? ( $is_star == "true" ? " and m.is_star = 1" : " and m.is_star = 0") : "" )
                .($is_task != "" ? ( $is_task == "true" ? " and m.is_task is not null" : "and m.is_task is null") : "" )
            )
            ->orderBy("m.date" ,"desc")
            ->getQuery()
            ->getResult();
        */
        $orderbysender = $sort_by_sender != "" ? ( $sort_by_sender == "1" ? " m.author_id ASC" : " m.author_id DESC") : "";
        $orderbydate = $sort_by_date != "" ? ( $sort_by_date == "1" ? " m.date ASC" : " m.date DESC") : "";
        $orderby = ($orderbysender != "" ? $orderbysender.($orderbydate != "" ? ",".$orderbydate : "") : ($orderbydate != "" ? $orderbydate : ""));
        $messages = $this->getDoctrine()->getManager()->createQuery(
            "SELECT m
            FROM AseagleBundle:ReceivedMessage m
            WHERE "."m.user_id = ".$receiver_id." ".($sender != "" ? " and m.author_id = ".$sender : "")
            .($search_str != "" ? " and m.subject LIKE '%".$search_str."%'" : "")
            .($is_read != "" ? ( $is_read == "true" ? " and m.is_read = 1" : " and m.is_read = 0") : "" )
            .($is_star != "" ? ( $is_star == "true" ? " and m.is_star = 1" : " and m.is_star = 0") : "" )
            .($is_task != "" ? ( $is_task == "true" ? " and m.is_task is not null" : "and m.is_task is null") : "" )
            .($orderby != "" ? " ORDER BY".$orderby : "" )
        )->getResult();

        $mapped_messages_info = array();
        foreach($messages as $message)
        {
            array_push($mapped_messages_info, array(
                'id' => $message->getId(),
                'r' => $message->getIsRead(),
                'author' => array( 'id' => $message->getAuthor()->getId(), 'fname' => $message->getAuthor()->getUsername()),
                'subj' => $message->getSubject(),
                'body' => strlen(strip_tags($message->getBody())) > 100 ? substr(strip_tags($message->getBody()),0 ,100) : strip_tags($message->getBody()),
                'date' => $message->getDate(),
                'star' => $message->getIsStar(),
                'task' => $message->getTaskDl()
            ));
        }

        return new Response(json_encode($mapped_messages_info),200,array('Content-Type'=>'application/json'));
    }

    public function openMailAction($message_id)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('AseagleBundle:ReceivedMessage')->find($message_id);
        $message->setIsRead(true);
        $em->flush();

        $result = array(
            'id' => $message->getId(),
            'author' => array( 'id' => $message->getAuthor()->getId(), 'fname' => $message->getAuthor()->getUsername(), 'company' => array()),
            'subj' => $message->getSubject(),
            'body' => $message->getBody(),
            'date' => $message->getDate(),
            'star' => $message->getIsStar(),
            'task' => $message->getTaskDl()
        );
        return new Response(json_encode($result),200,array('Content-Type'=>'application/json'));
    }

    public function listSentMailAction()
    {
        //get current user
        $user = $this->getUser();
        $messages = $this->getDoctrine()->getManager()->createQuery(
            "SELECT m
            FROM AseagleBundle:SentMessage m
            WHERE "."m.user_id = ".$user->getId()
        )->getResult();

        $mapped_messages_info = array();
        foreach($messages as $message)
        {
            $receivers = array();
            $reuserids = explode(",", $message->getReceiverIds());
            foreach($reuserids as $reuserid){
                if(strpos($reuserid,'c') !== false){
                    $com = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find(explode("_", $reuserid)[1]);
                    array_push($receivers, array( 'id' => $com->getId(), 'fname' => 'Company '.$com->getName()));
                }else{
                    $reuser = $this->getDoctrine()->getRepository('AseagleBundle:User')->find($reuserid);
                    array_push($receivers, array( 'id' => $reuser->getId(), 'fname' => $reuser->getUsername()));
                }
            }

            array_push($mapped_messages_info, array(
                'id' => $message->getId(),
                'receivers' => $receivers,
                'subj' => $message->getSubject(),
                'body' => strlen(strip_tags($message->getBody())) > 100 ? substr(strip_tags($message->getBody()),0 ,100) : strip_tags($message->getBody()),
                'date' => $message->getDate()
            ));
        }

        return new Response(json_encode($mapped_messages_info),200,array('Content-Type'=>'application/json'));
    }

    public function openSentMailAction($message_id)
    {
        $message = $this->getDoctrine()->getRepository('AseagleBundle:SentMessage')->find($message_id);
        $receivers = array();
        $reuserids = explode(",", $message->getReceiverIds());
        foreach($reuserids as $reuserid){
            $reuser = $this->getDoctrine()->getRepository('AseagleBundle:User')->find($reuserid);
            array_push($receivers, array( 'id' => $reuser->getId(), 'fname' => $reuser->getUsername()));
        }
        $result = array(
            'id' => $message->getId(),
            'receivers' => $receivers,
            'subj' => $message->getSubject(),
            'body' => $message->getBody(),
            'date' => $message->getDate()
        );
        return new Response(json_encode($result),200,array('Content-Type'=>'application/json'));
    }

    public function messageInteractionAction($message_id)
    {
        return new Response(json_encode(array("result"=>"success")),200,array('Content-Type'=>'application/json'));
    }

    public function listDraftAction()
    {
        //get current user
        $user = $this->getUser();
        $messages = $this->getDoctrine()->getManager()->createQuery(
            "SELECT m
            FROM AseagleBundle:SentMessage m
            WHERE m.is_draft=1 and "."m.user_id = ".$user->getId()
        )->getResult();

        $mapped_messages_info = array();
        foreach($messages as $message)
        {
            $receivers = array();
            $reuserids = explode(",", $message->getReceiverIds());
            foreach($reuserids as $reuserid){
                if(strpos($reuserid,'c') !== false){
                    $com = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find(explode("_", $reuserid)[1]);
                    array_push($receivers, array( 'id' => $com->getId(), 'fname' => 'Company '.$com->getName()));
                }else{
                    $reuser = $this->getDoctrine()->getRepository('AseagleBundle:User')->find($reuserid);
                    array_push($receivers, array( 'id' => $reuser->getId(), 'fname' => $reuser->getUsername()));
                }
            }

            array_push($mapped_messages_info, array(
                'id' => $message->getId(),
                'receivers' => $receivers,
                'subj' => $message->getSubject(),
                'body' => $message->getBody(),
                'date' => $message->getDate()
            ));
        }

        return new Response(json_encode($mapped_messages_info),200,array('Content-Type'=>'application/json'));
    }

    public function listContactAction()
    {
        //get current user
        $user = $this->getUser();
        $contacts = $this->getDoctrine()->getManager()->createQuery(
            "SELECT m
            FROM AseagleBundle:ContactList m
            WHERE m.user_id = ".$user->getId()
        )->getResult();

        $mapped_contact_info = array();
        foreach($contacts as $contact)
        {
            if($contact->getIsCompany()===true){
                $com = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($contact->getContactId());
                array_push($mapped_contact_info, array(
                    'id' => $com->getId(),
                    'name' => $com->getName(),
                    'c' => true
                ));
            }else{
                $con = $this->getDoctrine()->getRepository('AseagleBundle:User')->find($contact->getContactId());
                array_push($mapped_contact_info, array(
                    'id' => $con->getId(),
                    'name' => $con->getUsername()
                ));
            }
        }

        return new Response(json_encode($mapped_contact_info),200,array('Content-Type'=>'application/json'));
    }
}
