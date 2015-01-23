<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyCustomer;

class CompanyCustomerController extends Controller
{
    public function indexAction($seller_id)
    {
        $company_customers = $this->getDoctrine()->getRepository('AseagleBundle:CompanyCustomer')->findAll();
        return $this->render('AseagleBundle:CompanyCustomer:index.html.twig', array('customers' => $company_customers, 'seller_id' => $seller_id));
    }

    public function newAction($seller_id, Request $request)
    {
        $company_customer = new CompanyCustomer();
        $form = $this->createFormBuilder($company_customer)
            ->add('name', 'text', array('label' => 'Customer Name:'))
            ->add('country')
            ->add('products', 'text', array('label' => 'Products:') )
            ->add('annual_turnover', 'number', array('label' => 'Annual Turnover:'))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($seller_id);
            $company_customer->setCompany($company_profile);
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_customer);
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_customer_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyCustomer:new.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function editAction($seller_id, $id, Request $request)
    {
        $company_customer = $this->getDoctrine()->getRepository('AseagleBundle:CompanyCustomer')->find($id);
        $form = $this->createFormBuilder($company_customer)
            ->add('name', 'text', array('label' => 'Customer Name:'))
            ->add('country')
            ->add('products', 'text', array('label' => 'Products:') )
            ->add('annual_turnover', 'number', array('label' => 'Annual Turnover:'))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_customer_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyCustomer:edit.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function destroyAction($seller_id, $id)
    {
        $company_customer = $this->getDoctrine()->getRepository('AseagleBundle:CompanyCustomer')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($company_customer);
        $em->flush();
        return $this->redirect($this->generateUrl('seller_company_customer_index',array('seller_id' => $seller_id)));
    }
}
