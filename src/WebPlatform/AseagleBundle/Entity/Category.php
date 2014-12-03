<?php

namespace WebPlatform\AseagleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parent_id = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count = null;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
     */
    protected $products;

    /**
     * @ORM\OneToMany(targetEntity="BuyRequest", mappedBy="category")
     */
    protected $buy_requests;

    /**
     * @ORM\OneToMany(targetEntity="UserCategory", mappedBy="category")
     */
    protected $user_categories;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="parent")
     */
    protected $children;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->buy_requests = new ArrayCollection();
        $this->user_categories = new ArrayCollection();
        $this->chidren = new ArrayCollection();
    }

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
     * @return Category
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
     * Add products
     *
     * @param \WebPlatform\AseagleBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\WebPlatform\AseagleBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \WebPlatform\AseagleBundle\Entity\Product $products
     */
    public function removeProduct(\WebPlatform\AseagleBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add buy_requests
     *
     * @param \WebPlatform\AseagleBundle\Entity\BuyRequest $buyRequests
     * @return Category
     */
    public function addBuyRequest(\WebPlatform\AseagleBundle\Entity\BuyRequest $buyRequests)
    {
        $this->buy_requests[] = $buyRequests;

        return $this;
    }

    /**
     * Remove buy_requests
     *
     * @param \WebPlatform\AseagleBundle\Entity\BuyRequest $buyRequests
     */
    public function removeBuyRequest(\WebPlatform\AseagleBundle\Entity\BuyRequest $buyRequests)
    {
        $this->buy_requests->removeElement($buyRequests);
    }

    /**
     * Get buy_requests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBuyRequests()
    {
        return $this->buy_requests;
    }

    /**
     * Add user_categories
     *
     * @param \WebPlatform\AseagleBundle\Entity\UserCategory $userCategories
     * @return Category
     */
    public function addUserCategory(\WebPlatform\AseagleBundle\Entity\UserCategory $userCategories)
    {
        $this->user_categories[] = $userCategories;

        return $this;
    }

    /**
     * Remove user_categories
     *
     * @param \WebPlatform\AseagleBundle\Entity\UserCategory $userCategories
     */
    public function removeUserCategory(\WebPlatform\AseagleBundle\Entity\UserCategory $userCategories)
    {
        $this->user_categories->removeElement($userCategories);
    }

    /**
     * Get user_categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserCategories()
    {
        return $this->user_categories;
    }



    /**
     * Set count
     *
     * @param integer $count
     * @return Category
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Category
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Category
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set parent_id
     *
     * @param integer $parentId
     * @return Category
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set parent
     *
     * @param \WebPlatform\AseagleBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\WebPlatform\AseagleBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \WebPlatform\AseagleBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add children
     *
     * @param \WebPlatform\AseagleBundle\Entity\Category $children
     * @return Category
     */
    public function addChild(\WebPlatform\AseagleBundle\Entity\Category $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \WebPlatform\AseagleBundle\Entity\Category $children
     */
    public function removeChild(\WebPlatform\AseagleBundle\Entity\Category $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }
}
