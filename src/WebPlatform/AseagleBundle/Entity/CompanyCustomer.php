<?php

namespace WebPlatform\AseagleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCustomers
 *
 * @ORM\Table(name="company_customer")
 * @ORM\Entity
 */
class CompanyCustomer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=500)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $country_id;

    /**
     * @var string
     *
     * @ORM\Column(name="products", type="string", length=1000)
     */
    private $products;

    /**
     * @var integer
     *
     * @ORM\Column(name="annual_turnover", type="integer")
     */
    private $annual_turnover;

    /**
     * @var integer
     *
     * @ORM\Column(name="company_id", type="integer")
     */
    private $company_id;

    /**
     * @ORM\ManyToOne(targetEntity="CompanyProfile", inversedBy="company_customers")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $company;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="company_customers")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected $country;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CompanyCustomers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set products
     *
     * @param string $products
     * @return CompanyCustomers
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return string 
     */
    public function getProducts()
    {
        return $this->products;
    }


    /**
     * Set annual_turnover
     *
     * @param integer $annualTurnover
     * @return CompanyCustomer
     */
    public function setAnnualTurnover($annualTurnover)
    {
        $this->annual_turnover = $annualTurnover;

        return $this;
    }

    /**
     * Get annual_turnover
     *
     * @return integer 
     */
    public function getAnnualTurnover()
    {
        return $this->annual_turnover;
    }

    /**
     * Set company_id
     *
     * @param integer $companyId
     * @return CompanyCustomer
     */
    public function setCompanyId($companyId)
    {
        $this->company_id = $companyId;

        return $this;
    }

    /**
     * Get company_id
     *
     * @return integer 
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Set company
     *
     * @param \WebPlatform\AseagleBundle\Entity\CompanyProfile $company
     * @return CompanyCustomer
     */
    public function setCompany(\WebPlatform\AseagleBundle\Entity\CompanyProfile $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \WebPlatform\AseagleBundle\Entity\CompanyProfile 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set country_id
     *
     * @param integer $countryId
     * @return CompanyCustomer
     */
    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;

        return $this;
    }

    /**
     * Get country_id
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set country
     *
     * @param \WebPlatform\AseagleBundle\Entity\Country $country
     * @return CompanyCustomer
     */
    public function setCountry(\WebPlatform\AseagleBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \WebPlatform\AseagleBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
