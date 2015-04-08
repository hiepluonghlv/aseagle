<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyCertification;

class CompanyCertificationController extends Controller
{
    public function indexAction($seller_id)
    {
        $company_certifications = $this->getDoctrine()->getRepository('AseagleBundle:CompanyCertification')->findAll();
        return $this->render('AseagleBundle:CompanyCertification:index.html.twig', array('certifications' => $company_certifications, 'seller_id' => $seller_id));
    }

    public function newAction($seller_id, Request $request)
    {
        $company_certification = new CompanyCertification();
        $form = $this->createFormBuilder($company_certification)
            ->add('name', 'text', array('label' => 'Certification Name:', 'attr' => array('class'=>'form-control input-md', 'placeholder' => 'Give certification a name')))
            ->add('type', 'integer', array('label' => 'Type:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('issued_by', 'date', array('label' => 'Issued By:'))
            ->add('start_date', 'date', array('label' => 'Start Date:'))
            ->add('end_date', 'date', array('label' => 'End Date:'))
            ->add('scope', 'text', array('label' => 'Scope:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($seller_id);
            $company_certification->setCompany($company_profile);
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_certification);
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_certification_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyCertification:new.html.twig', array(
                'form' => $form->createView(),'seller_id' => $seller_id
            ));
        }
    }

    public function editAction($seller_id, $id, Request $request)
    {
        $company_certification = $this->getDoctrine()->getRepository('AseagleBundle:CompanyCertification')->find($id);
        $form = $this->createFormBuilder($company_certification)
            ->add('name', 'text', array('label' => 'Certification Name:', 'attr' => array('class'=>'form-control input-md', 'placeholder' => 'Give certification a name')))
            ->add('type', 'integer', array('label' => 'Type:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('issued_by', 'date', array('label' => 'Issued By:'))
            ->add('start_date', 'date', array('label' => 'Start Date:'))
            ->add('end_date', 'date', array('label' => 'End Date:'))
            ->add('scope', 'text', array('label' => 'Scope:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_certification_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyCertification:edit.html.twig', array(
                'form' => $form->createView(),'seller_id' => $seller_id
            ));
        }
    }

    public function destroyAction($seller_id, $id)
    {
        $company_certification = $this->getDoctrine()->getRepository('AseagleBundle:CompanyCertification')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($company_certification);
        $em->flush();
        return $this->redirect($this->generateUrl('seller_company_certification_index',array('seller_id' => $seller_id)));
    }

}
