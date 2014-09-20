<?php

namespace WebPlatform\AseagleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuyRequest
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class BuyRequest
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
     * @ORM\Column(name="buyer_id", type="integer")
     */
    private $buyerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity = null;

    /**
     * @var string
     *
     * @ORM\Column(name="asking_price", type="string", length=255, nullable=true)
     */
    private $askingPrice = null;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=500)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description = null;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="buy_requests")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="buy_requests")
     * @ORM\JoinColumn(name="buyer_id", referencedColumnName="id")
     */
    protected $buyer;

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
     * Set buyerId
     *
     * @param integer $buyerId
     * @return BuyRequest
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;

        return $this;
    }

    /**
     * Get buyerId
     *
     * @return integer 
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return BuyRequest
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return BuyRequest
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
     * Set askingPrice
     *
     * @param string $askingPrice
     * @return BuyRequest
     */
    public function setAskingPrice($askingPrice)
    {
        $this->askingPrice = $askingPrice;

        return $this;
    }

    /**
     * Get askingPrice
     *
     * @return string 
     */
    public function getAskingPrice()
    {
        return $this->askingPrice;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return BuyRequest
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return BuyRequest
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set category
     *
     * @param \WebPlatform\AseagleBundle\Entity\Category $category
     * @return BuyRequest
     */
    public function setCategory(\WebPlatform\AseagleBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \WebPlatform\AseagleBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set buyer
     *
     * @param \WebPlatform\AseagleBundle\Entity\User $buyer
     * @return BuyRequest
     */
    public function setBuyer(\WebPlatform\AseagleBundle\Entity\User $buyer = null)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer
     *
     * @return \WebPlatform\AseagleBundle\Entity\User 
     */
    public function getBuyer()
    {
        return $this->buyer;
    }
}
