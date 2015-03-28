<?php

namespace WebPlatform\AseagleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quotation
 *
 * @ORM\Table(name="quotation")
 * @ORM\Entity
 */
class Quotation
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
     * @var integer
     *
     * @ORM\Column(name="buying_request_id", type="integer")
     */
    private $buying_request_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="company_id", type="integer")
     */
    private $company_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="seller_id", type="integer")
     */
    private $seller_id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_archived", type="boolean")
     */
    private $is_archived;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     */
    private $product_id;

    /**
     * @var string
     *
     * @ORM\Column(name="quote_message", type="text")
     */
    private $quote_message;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    private $currency = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_type", type="string", length=255)
     */
    private $quantity_type;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_term", type="string", length=255)
     */
    private $payment_term;

    /**
     * @var string
     *
     * @ORM\Column(name="deliver_time", type="string", length=255)
     */
    private $deliver_time;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_date", type="datetime")
     */
    private $expired_date;

    /**
     * @ORM\ManyToOne(targetEntity="CompanyProfile", inversedBy="quotations")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $company;

    /**
     * @ORM\ManyToOne(targetEntity="BuyingRequest", inversedBy="quotations")
     * @ORM\JoinColumn(name="buying_request_id", referencedColumnName="id")
     */
    protected $buying_request;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="quotations")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $product;


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
     * Set company_id
     *
     * @param integer $companyId
     * @return Quotation
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
     * Set seller_id
     *
     * @param integer $sellerId
     * @return Quotation
     */
    public function setSellerId($sellerId)
    {
        $this->seller_id = $sellerId;

        return $this;
    }

    /**
     * Get seller_id
     *
     * @return integer 
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * Set is_archived
     *
     * @param boolean $isArchived
     * @return Quotation
     */
    public function setIsArchived($isArchived)
    {
        $this->is_archived = $isArchived;

        return $this;
    }

    /**
     * Get is_archived
     *
     * @return boolean 
     */
    public function getIsArchived()
    {
        return $this->is_archived;
    }

    /**
     * Set product_id
     *
     * @param integer $productId
     * @return Quotation
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get product_id
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set quote_message
     *
     * @param string $quoteMessage
     * @return Quotation
     */
    public function setQuoteMessage($quoteMessage)
    {
        $this->quote_message = $quoteMessage;

        return $this;
    }

    /**
     * Get quote_message
     *
     * @return string 
     */
    public function getQuoteMessage()
    {
        return $this->quote_message;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Quotation
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Quotation
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantity_type
     *
     * @param string $quantityType
     * @return Quotation
     */
    public function setQuantityType($quantityType)
    {
        $this->quantity_type = $quantityType;

        return $this;
    }

    /**
     * Get quantity_type
     *
     * @return string 
     */
    public function getQuantityType()
    {
        return $this->quantity_type;
    }



    /**
     * Set deliver_time
     *
     * @param string $deliverTime
     * @return Quotation
     */
    public function setDeliverTime($deliverTime)
    {
        $this->deliver_time = $deliverTime;

        return $this;
    }

    /**
     * Get deliver_time
     *
     * @return string 
     */
    public function getDeliverTime()
    {
        return $this->deliver_time;
    }

    /**
     * Set expired_date
     *
     * @param \DateTime $expiredDate
     * @return Quotation
     */
    public function setExpiredDate($expiredDate)
    {
        $this->expired_date = $expiredDate;

        return $this;
    }

    /**
     * Get expired_date
     *
     * @return \DateTime 
     */
    public function getExpiredDate()
    {
        return $this->expired_date;
    }

    /**
     * Set company
     *
     * @param \WebPlatform\AseagleBundle\Entity\CompanyProfile $company
     * @return Quotation
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
     * Set buying_request
     *
     * @param \WebPlatform\AseagleBundle\Entity\BuyingRequest $buyingRequest
     * @return Quotation
     */
    public function setBuyingRequest(\WebPlatform\AseagleBundle\Entity\BuyingRequest $buyingRequest = null)
    {
        $this->buying_request = $buyingRequest;

        return $this;
    }

    /**
     * Get buying_request
     *
     * @return \WebPlatform\AseagleBundle\Entity\BuyingRequest 
     */
    public function getBuyingRequest()
    {
        return $this->buying_request;
    }

    /**
     * Set product
     *
     * @param \WebPlatform\AseagleBundle\Entity\Product $product
     * @return Quotation
     */
    public function setProduct(\WebPlatform\AseagleBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \WebPlatform\AseagleBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set payment_term
     *
     * @param string $paymentTerm
     * @return Quotation
     */
    public function setPaymentTerm($paymentTerm)
    {
        $this->payment_term = $paymentTerm;

        return $this;
    }

    /**
     * Get payment_term
     *
     * @return string 
     */
    public function getPaymentTerm()
    {
        return $this->payment_term;
    }

    /**
     * Set buying_request_id
     *
     * @param integer $buyingRequestId
     * @return Quotation
     */
    public function setBuyingRequestId($buyingRequestId)
    {
        $this->buying_request_id = $buyingRequestId;

        return $this;
    }

    /**
     * Get buying_request_id
     *
     * @return integer 
     */
    public function getBuyingRequestId()
    {
        return $this->buying_request_id;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Quotation
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
