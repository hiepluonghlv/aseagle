<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyPatent;

class CompanyPatentController extends Controller
{
    public function indexAction($seller_id)
    {
        $company_patents = $this->getDoctrine()->getRepository('AseagleBundle:CompanyPatent')->findAll();
        return $this->render('AseagleBundle:CompanyPatent:index.html.twig', array('patents' => $company_patents, 'seller_id' => $seller_id));
    }

    public function newAction($seller_id, Request $request)
    {
        $company_patent = new CompanyPatent();
        $form = $this->createFormBuilder($company_patent)
            ->add('name', 'text', array('label' => 'Patent Name:', 'attr' => array('class'=>'form-control input-md', 'placeholder' => 'Give a name')))
            ->add('country',null , array('label' => 'Country:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('products', 'text', array('label' => 'Product:', 'attr' => array('class'=>'form-control input-md')) )
            ->add('annual_turnover', 'integer', array('label' => 'Annual Turnover:', 'attr' => array('class'=>'form-control input-md')) )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($seller_id);
            $company_patent->setCompany($company_profile);
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_patent);
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_patent_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyPatent:new.html.twig', array(
                'form' => $form->createView(),'seller_id' => $seller_id
            ));
        }
    }

    public function editAction($seller_id, $id, Request $request)
    {
        $company_patent = $this->getDoctrine()->getRepository('AseagleBundle:CompanyPatent')->find($id);
        $form = $this->createFormBuilder($company_patent)
            ->add('name', 'text', array('label' => 'Patent Name:', 'attr' => array('class'=>'form-control input-md', 'placeholder' => 'Give a name')))
            ->add('country',null , array('label' => 'Country:', 'attr'=> array('class'=>'form-control input-md')))
            ->add('products', 'text', array('label' => 'Product:', 'attr' => array('class'=>'form-control input-md')) )
            ->add('annual_turnover', 'integer', array('label' => 'Annual Turnover:', 'attr' => array('class'=>'form-control input-md')) )
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('seller_company_patent_index',array('seller_id' => $seller_id)));
        }else{
            return $this->render('AseagleBundle:CompanyPatent:edit.html.twig', array(
                'form' => $form->createView(),'seller_id' => $seller_id
            ));
        }
    }

    public function destroyAction($seller_id, $id)
    {
        $company_patent = $this->getDoctrine()->getRepository('AseagleBundle:CompanyPatent')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($company_patent);
        $em->flush();
        return $this->redirect($this->generateUrl('seller_company_patent_index',array('seller_id' => $seller_id)));
    }

}
