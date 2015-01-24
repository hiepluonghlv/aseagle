<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyTrademark;

class CompanyTrademarkController extends Controller
{
    public function indexAction($seller_id)
    {
        $company_trademarks = $this->getDoctrine()->getRepository('AseagleBundle:CompanyTrademark')->findAll();
        return $this->render('AseagleBundle:CompanyTrademark:index.html.twig', array('trademarks' => $company_trademarks, 'seller_id' => $seller_id));
    }

    public function newAction($seller_id, Request $request)
    {
        $company_trademark = new CompanyTrademark();
        $form = $this->createFormBuilder($company_trademark)
            ->add('name', 'text', array('label' => 'Certification Name:'))
            ->add('registration_number', 'text', array('label' => 'Registration Number:'))
            ->add('start_date', 'date', array('label' => 'Start Date:') )
            ->add('end_date', 'date', array('label' => 'End Date:') )
            ->add('approved_goods', 'text', array('label' => 'Approved Goods:') )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($seller_id);
            $company_trademark->setCompany($company_profile);
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_trademark);
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_trademark_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyTrademark:new.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function editAction($seller_id, $id, Request $request)
    {
        $company_trademark = $this->getDoctrine()->getRepository('AseagleBundle:CompanyTrademark')->find($id);
        $form = $this->createFormBuilder($company_trademark)
            ->add('name', 'text', array('label' => 'Certification Name:'))
            ->add('registration_number', 'text', array('label' => 'Registration Number:'))
            ->add('start_date', 'date', array('label' => 'Start Date:') )
            ->add('end_date', 'date', array('label' => 'End Date:') )
            ->add('approved_goods', 'text', array('label' => 'Approved Goods:') )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_trademark_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyTrademark:edit.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function destroyAction($seller_id, $id)
    {
        $company_trademark = $this->getDoctrine()->getRepository('AseagleBundle:CompanyTrademark')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($company_trademark);
        $em->flush();
        return $this->redirect($this->generateUrl('seller_company_trademark_index',array('seller_id' => $seller_id)));
    }

}
