<?php

namespace Proxies\__CG__\WebPlatform\AseagleBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \WebPlatform\AseagleBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'parentId', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'template', 'products', 'buy_requests', 'user_categories', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'parent');
        }

        return array('__isInitialized__', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'parentId', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'template', 'products', 'buy_requests', 'user_categories', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\Category' . "\0" . 'parent');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentId($parentId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentId', array($parentId));

        return parent::setParentId($parentId);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', array());

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', array($template));

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', array());

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduct(\WebPlatform\AseagleBundle\Entity\Product $products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduct', array($products));

        return parent::addProduct($products);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduct(\WebPlatform\AseagleBundle\Entity\Product $products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduct', array($products));

        return parent::removeProduct($products);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', array());

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addBuyRequest(\WebPlatform\AseagleBundle\Entity\BuyRequest $buyRequests)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBuyRequest', array($buyRequests));

        return parent::addBuyRequest($buyRequests);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBuyRequest(\WebPlatform\AseagleBundle\Entity\BuyRequest $buyRequests)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBuyRequest', array($buyRequests));

        return parent::removeBuyRequest($buyRequests);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyRequests()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyRequests', array());

        return parent::getBuyRequests();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserCategory(\WebPlatform\AseagleBundle\Entity\UserCategory $userCategories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserCategory', array($userCategories));

        return parent::addUserCategory($userCategories);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserCategory(\WebPlatform\AseagleBundle\Entity\UserCategory $userCategories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserCategory', array($userCategories));

        return parent::removeUserCategory($userCategories);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserCategories', array());

        return parent::getUserCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\WebPlatform\AseagleBundle\Entity\Category $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', array($parent));

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', array());

        return parent::getParent();
    }

}