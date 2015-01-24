<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyHonorAward;

class CompanyHonorAwardController extends Controller
{
    public function indexAction($seller_id)
    {
        $company_honor_awards = $this->getDoctrine()->getRepository('AseagleBundle:CompanyHonorAward')->findAll();
        return $this->render('AseagleBundle:CompanyHonorAward:index.html.twig', array('awards' => $company_honor_awards, 'seller_id' => $seller_id));
    }

    public function newAction($seller_id, Request $request)
    {
        $company_honor_award = new CompanyHonorAward();
        $form = $this->createFormBuilder($company_honor_award)
            ->add('name', 'text', array('label' => 'Customer Name:'))
            ->add('issued_by', 'date', array('label' => 'Issued By:'))
            ->add('start_date', 'date', array('label' => 'Start Date:'))
            ->add('description', 'text', array('label' => 'Description:'))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($seller_id);
            $company_honor_award->setCompany($company_profile);
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_honor_award);
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_honor_award_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyHonorAward:new.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function editAction($seller_id, $id, Request $request)
    {
        $company_honor_award = $this->getDoctrine()->getRepository('AseagleBundle:CompanyHonorAward')->find($id);
        $form = $this->createFormBuilder($company_honor_award)
            ->add('name', 'text', array('label' => 'Customer Name:'))
            ->add('issued_by', 'date', array('label' => 'Issued By:'))
            ->add('start_date', 'date', array('label' => 'Start Date:'))
            ->add('description', 'text', array('label' => 'Description:'))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_honor_award_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyHonorAward:edit.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function destroyAction($seller_id, $id)
    {
        $company_honor_award = $this->getDoctrine()->getRepository('AseagleBundle:CompanyHonorAward')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($company_honor_award);
        $em->flush();
        return $this->redirect($this->generateUrl('seller_company_honor_award_index',array('seller_id' => $seller_id)));
    }

}
