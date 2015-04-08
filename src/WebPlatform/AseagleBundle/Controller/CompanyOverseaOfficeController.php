<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyOverseaOffice;

class CompanyOverseaOfficeController extends Controller
{
    public function indexAction($seller_id)
    {
        $company_oversea_offices = $this->getDoctrine()->getRepository('AseagleBundle:CompanyOverseaOffice')->findAll();
        return $this->render('AseagleBundle:CompanyOverseaOffice:index.html.twig', array('oversea_offices' => $company_oversea_offices, 'seller_id' => $seller_id));
    }

    public function newAction($seller_id, Request $request)
    {
        $company_oversea_office = new CompanyOverseaOffice();
        $form = $this->createFormBuilder($company_oversea_office)
            ->add('country',null , array('label' => 'Country:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('city', 'text', array('label' => 'City:', 'attr' => array('class'=>'form-control input-md')) )
            ->add('address', 'text', array('label' => 'Address:', 'attr' => array('class'=>'form-control input-md')))
            ->add('telephone', 'text', array('label' => 'Telephone:', 'attr' => array('class'=>'form-control input-md')))
            ->add('dutires', 'text', array('label' => 'Dutires:', 'attr' => array('class'=>'form-control input-md')))
            ->add('personInCharge', 'text', array('label' => 'Person In Charge:', 'attr' => array('class'=>'form-control input-md')))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($seller_id);
            $company_oversea_office->setCompany($company_profile);
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_oversea_office);
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_oversea_office_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyOverseaOffice:new.html.twig', array(
                'form' => $form->createView(),'seller_id' => $seller_id
            ));
        }
    }

    public function editAction($seller_id, $id, Request $request)
    {
        $company_oversea_office = $this->getDoctrine()->getRepository('AseagleBundle:CompanyOverseaOffice')->find($id);
        $form = $this->createFormBuilder($company_oversea_office)
            ->add('country',null , array('label' => 'Country:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('city', 'text', array('label' => 'City:', 'attr' => array('class'=>'form-control input-md')) )
            ->add('address', 'text', array('label' => 'Address:', 'attr' => array('class'=>'form-control input-md')))
            ->add('telephone', 'text', array('label' => 'Telephone:', 'attr' => array('class'=>'form-control input-md')))
            ->add('dutires', 'text', array('label' => 'Dutires:', 'attr' => array('class'=>'form-control input-md')))
            ->add('personInCharge', 'text', array('label' => 'Person In Charge:', 'attr' => array('class'=>'form-control input-md')))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_oversea_office_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyOverseaOffice:new.html.twig', array(
                'form' => $form->createView(),'seller_id' => $seller_id
            ));
        }
    }

    public function destroyAction($seller_id, $id)
    {
        $company_oversea_office = $this->getDoctrine()->getRepository('AseagleBundle:CompanyOverseaOffice')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($company_oversea_office);
        $em->flush();
        return $this->redirect($this->generateUrl('seller_company_oversea_office_index',array('seller_id' => $seller_id)));
    }

}
