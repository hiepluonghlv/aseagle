<?php

namespace WebPlatform\AseagleBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    protected $avatar = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_seller", type="boolean", nullable=true)
     */
    protected $is_seller = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="membership_type", type="integer", nullable=true)
     */
    protected $membership_type = null;

    /**
     * @var string
     *
     * @ORM\Column(name="seller_info_1", type="string", nullable=true)
     */
    protected $seller_info_1 = null;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="owner")
     */
    protected $products;

    /**
     * @ORM\OneToMany(targetEntity="BuyRequest", mappedBy="buyer")
     */
    protected $buy_requests;

    /**
     * @ORM\OneToMany(targetEntity="UserCategory", mappedBy="seller")
     */
    protected $user_categories;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="buyer")
     */
    protected $buyer_transactions;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="seller")
     */
    protected $seller_transactions;

    /**
     * @ORM\OneToMany(targetEntity="Follow", mappedBy="followed_trader")
     */
    protected $follower_follows;

    /**
     * @ORM\OneToMany(targetEntity="Follow", mappedBy="follower")
     */
    protected $followed_trader_follows;

    public function __construct()
    {
        parent::__construct();
        $this->products = new ArrayCollection();
        $this->buy_requests = new ArrayCollection();
        $this->user_categories = new ArrayCollection();
        $this->buyer_transactions = new ArrayCollection();
        $this->seller_transactions = new ArrayCollection();
        $this->follower_follows = new ArrayCollection();
        $this->followed_trader_follows = new ArrayCollection();
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
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set is_seller
     *
     * @param boolean $isSeller
     * @return User
     */
    public function setIsSeller($isSeller)
    {
        $this->is_seller = $isSeller;

        return $this;
    }

    /**
     * Get is_seller
     *
     * @return boolean 
     */
    public function getIsSeller()
    {
        return $this->is_seller;
    }

    /**
     * Set membership_type
     *
     * @param integer $membershipType
     * @return User
     */
    public function setMembershipType($membershipType)
    {
        $this->membership_type = $membershipType;

        return $this;
    }

    /**
     * Get membership_type
     *
     * @return integer 
     */
    public function getMembershipType()
    {
        return $this->membership_type;
    }

    /**
     * Set seller_info_1
     *
     * @param string $sellerInfo1
     * @return User
     */
    public function setSellerInfo1($sellerInfo1)
    {
        $this->seller_info_1 = $sellerInfo1;

        return $this;
    }

    /**
     * Get seller_info_1
     *
     * @return string 
     */
    public function getSellerInfo1()
    {
        return $this->seller_info_1;
    }



    /**
     * Add products
     *
     * @param \WebPlatform\AseagleBundle\Entity\Product $products
     * @return User
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
     * @return User
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
     * @return User
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
     * Add buyer_transactions
     *
     * @param \WebPlatform\AseagleBundle\Entity\Transaction $buyerTransactions
     * @return User
     */
    public function addBuyerTransaction(\WebPlatform\AseagleBundle\Entity\Transaction $buyerTransactions)
    {
        $this->buyer_transactions[] = $buyerTransactions;

        return $this;
    }

    /**
     * Remove buyer_transactions
     *
     * @param \WebPlatform\AseagleBundle\Entity\Transaction $buyerTransactions
     */
    public function removeBuyerTransaction(\WebPlatform\AseagleBundle\Entity\Transaction $buyerTransactions)
    {
        $this->buyer_transactions->removeElement($buyerTransactions);
    }

    /**
     * Get buyer_transactions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBuyerTransactions()
    {
        return $this->buyer_transactions;
    }

    /**
     * Add seller_transactions
     *
     * @param \WebPlatform\AseagleBundle\Entity\Transaction $sellerTransactions
     * @return User
     */
    public function addSellerTransaction(\WebPlatform\AseagleBundle\Entity\Transaction $sellerTransactions)
    {
        $this->seller_transactions[] = $sellerTransactions;

        return $this;
    }

    /**
     * Remove seller_transactions
     *
     * @param \WebPlatform\AseagleBundle\Entity\Transaction $sellerTransactions
     */
    public function removeSellerTransaction(\WebPlatform\AseagleBundle\Entity\Transaction $sellerTransactions)
    {
        $this->seller_transactions->removeElement($sellerTransactions);
    }

    /**
     * Get seller_transactions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSellerTransactions()
    {
        return $this->seller_transactions;
    }

    /**
     * Add follower_follows
     *
     * @param \WebPlatform\AseagleBundle\Entity\Follow $followerFollows
     * @return User
     */
    public function addFollowerFollow(\WebPlatform\AseagleBundle\Entity\Follow $followerFollows)
    {
        $this->follower_follows[] = $followerFollows;

        return $this;
    }

    /**
     * Remove follower_follows
     *
     * @param \WebPlatform\AseagleBundle\Entity\Follow $followerFollows
     */
    public function removeFollowerFollow(\WebPlatform\AseagleBundle\Entity\Follow $followerFollows)
    {
        $this->follower_follows->removeElement($followerFollows);
    }

    /**
     * Get follower_follows
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFollowerFollows()
    {
        return $this->follower_follows;
    }

    /**
     * Add followed_trader_follows
     *
     * @param \WebPlatform\AseagleBundle\Entity\Follow $followedTraderFollows
     * @return User
     */
    public function addFollowedTraderFollow(\WebPlatform\AseagleBundle\Entity\Follow $followedTraderFollows)
    {
        $this->followed_trader_follows[] = $followedTraderFollows;

        return $this;
    }

    /**
     * Remove followed_trader_follows
     *
     * @param \WebPlatform\AseagleBundle\Entity\Follow $followedTraderFollows
     */
    public function removeFollowedTraderFollow(\WebPlatform\AseagleBundle\Entity\Follow $followedTraderFollows)
    {
        $this->followed_trader_follows->removeElement($followedTraderFollows);
    }

    /**
     * Get followed_trader_follows
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFollowedTraderFollows()
    {
        return $this->followed_trader_follows;
    }


}
