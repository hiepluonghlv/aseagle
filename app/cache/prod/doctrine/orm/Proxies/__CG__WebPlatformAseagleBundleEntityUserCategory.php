<?php

namespace Proxies\__CG__\WebPlatform\AseagleBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserCategory extends \WebPlatform\AseagleBundle\Entity\UserCategory implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\UserCategory' . "\0" . 'id', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\UserCategory' . "\0" . 'sellerId', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\UserCategory' . "\0" . 'categoryId', 'category', 'seller');
        }

        return array('__isInitialized__', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\UserCategory' . "\0" . 'id', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\UserCategory' . "\0" . 'sellerId', '' . "\0" . 'WebPlatform\\AseagleBundle\\Entity\\UserCategory' . "\0" . 'categoryId', 'category', 'seller');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserCategory $proxy) {
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
    public function setSellerId($sellerId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSellerId', array($sellerId));

        return parent::setSellerId($sellerId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSellerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSellerId', array());

        return parent::getSellerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryId($categoryId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryId', array($categoryId));

        return parent::setCategoryId($categoryId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryId', array());

        return parent::getCategoryId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\WebPlatform\AseagleBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeller(\WebPlatform\AseagleBundle\Entity\User $seller = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeller', array($seller));

        return parent::setSeller($seller);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeller()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeller', array());

        return parent::getSeller();
    }

}
