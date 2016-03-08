<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TblWebsite extends \AppBundle\Entity\TblWebsite implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'block1', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'block2', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'block3', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'idWebsite', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'path'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'block1', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'block2', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'block3', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'idWebsite', '' . "\0" . 'AppBundle\\Entity\\TblWebsite' . "\0" . 'path'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TblWebsite $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock1($block1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlock1', [$block1]);

        return parent::setBlock1($block1);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlock1', []);

        return parent::getBlock1();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock2($block2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlock2', [$block2]);

        return parent::setBlock2($block2);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlock2', []);

        return parent::getBlock2();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock3($block3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlock3', [$block3]);

        return parent::setBlock3($block3);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlock3', []);

        return parent::getBlock3();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdWebsite()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdWebsite();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdWebsite', []);

        return parent::getIdWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

}