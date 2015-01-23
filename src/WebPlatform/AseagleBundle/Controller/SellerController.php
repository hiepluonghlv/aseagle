<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use WebPlatform\AseagleBundle\Entity\CompanyProfile;

class SellerController extends Controller
{
    public function newAction(Request $request)
    {
        $company_profile = new CompanyProfile();
        $form = $this->createFormBuilder($company_profile)
            ->add('name', 'text', array('label' => 'Company Name:'))
            ->add('reg_address', 'text', array('label' => 'Register Address:'))
            ->add('reg_year', 'date', array('label' => 'Register Year:'))
            ->add('reg_country')
            ->add('total_employee', 'number', array('label' => 'Total of Employee:') )
            ->add('ops_address', 'text', array('label' => 'Operation Address:'))
            ->add('ops_city', 'text', array('label' => 'Operation City:'))
            ->add('ops_country')
            ->add('ops_zip', 'text', array('label' => 'Operation Zip:'))
            ->add('main_products', 'text', array('label' => 'Primary Productions:'))
            ->add('others_selling', 'text', array('label' => 'Others Selling:'))
            ->add('website', 'text', array('label' => 'Website:'))
            ->add('legal_owner', 'text', array('label' => 'Legal Owner:'))
            ->add('office_site', 'number', array('label' => 'Office Site:'))
            ->add('total_sale_volumn', 'text', array('label' => 'Total Sale Volumn:'))
            ->add('export_percentage', 'text')
            ->add('main_markets_distribution', 'text')
            ->add('year_start_export', 'number')
            ->add('total_trade_staff', 'number')
            ->add('total_rnd_staff', 'number')
            ->add('total_qc_staff', 'number')
            ->add('nearest_port', 'text')
            ->add('average_lead_time', 'number')
            ->add('deliver_term', 'text')
            ->add('currency', 'text')
            ->add('payment_type', 'text')
            ->add('language', 'text')
            ->add('company_advantage', 'textarea')
            ->add('detail_introduction', 'textarea')
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            // save company_profile
            $em = $this->getDoctrine()->getManager();
            $em->persist($company_profile);
            $em->flush();
            //get company_id and save seller
            $seller = $this->getUser();
            $seller->setCompany($company_profile);
            $em->flush();
            return $this->redirect($this->generateUrl('aseagle_homepage'));
        }else{
            return $this->render('AseagleBundle:Seller:new.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function editAction($id, Request $request)
    {
        $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($id);

        $form = $this->createFormBuilder($company_profile)
            ->add('name', 'text', array('label' => 'Company Name:'))
            ->add('reg_address', 'text', array('label' => 'Register Address:'))
            ->add('reg_year', 'date', array('label' => 'Register Year:'))
            ->add('reg_country')
            ->add('total_employee', 'number', array('label' => 'Total of Employee:') )
            ->add('ops_address', 'text', array('label' => 'Operation Address:'))
            ->add('ops_city', 'text', array('label' => 'Operation City:'))
            ->add('ops_country')
            ->add('ops_zip', 'text', array('label' => 'Operation Zip:'))
            ->add('main_products', 'text', array('label' => 'Primary Productions:'))
            ->add('others_selling', 'text', array('label' => 'Others Selling:'))
            ->add('website', 'text', array('label' => 'Website:'))
            ->add('legal_owner', 'text', array('label' => 'Legal Owner:'))
            ->add('office_site', 'number', array('label' => 'Office Site:'))
            ->add('total_sale_volumn', 'text', array('label' => 'Total Sale Volumn:'))
            ->add('export_percentage', 'text')
            ->add('main_markets_distribution', 'text')
            ->add('year_start_export', 'number')
            ->add('total_trade_staff', 'number')
            ->add('total_rnd_staff', 'number')
            ->add('total_qc_staff', 'number')
            ->add('nearest_port', 'text')
            ->add('average_lead_time', 'number')
            ->add('deliver_term', 'text')
            ->add('currency', 'text')
            ->add('payment_type', 'text')
            ->add('language', 'text')
            ->add('company_advantage', 'textarea')
            ->add('detail_introduction', 'textarea')
            ->add('save', 'submit', array('label' => 'Update', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //$em->persist($company_profile);
            $em->flush();
            return $this->redirect($this->generateUrl('aseagle_homepage'));
        }else{
            return $this->render('AseagleBundle:Seller:edit.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    public function showAction($id, Request $request)
    {
        $company_profile = $this->getDoctrine()->getRepository('AseagleBundle:CompanyProfile')->find($id);;


    }
}
