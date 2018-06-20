<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Imagen extends \AppBundle\Entity\Imagen implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'url', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'alt', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'destacada', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'portada', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'eventoid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'artistaid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'profesionalid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'anuncioid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'localid'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'url', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'alt', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'destacada', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'portada', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'eventoid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'artistaid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'profesionalid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'anuncioid', '' . "\0" . 'AppBundle\\Entity\\Imagen' . "\0" . 'localid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Imagen $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlt($alt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlt', [$alt]);

        return parent::setAlt($alt);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlt', []);

        return parent::getAlt();
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
    public function setDestacada($destacada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestacada', [$destacada]);

        return parent::setDestacada($destacada);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestacada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestacada', []);

        return parent::getDestacada();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortada($portada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortada', [$portada]);

        return parent::setPortada($portada);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortada', []);

        return parent::getPortada();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventoid(\AppBundle\Entity\Evento $eventoid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventoid', [$eventoid]);

        return parent::setEventoid($eventoid);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventoid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventoid', []);

        return parent::getEventoid();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtistaid(\AppBundle\Entity\Artista $artistaid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtistaid', [$artistaid]);

        return parent::setArtistaid($artistaid);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtistaid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtistaid', []);

        return parent::getArtistaid();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfesionalid(\AppBundle\Entity\Profesional $profesionalid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfesionalid', [$profesionalid]);

        return parent::setProfesionalid($profesionalid);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesionalid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesionalid', []);

        return parent::getProfesionalid();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnuncioid(\AppBundle\Entity\Anuncio $anuncioid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnuncioid', [$anuncioid]);

        return parent::setAnuncioid($anuncioid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnuncioid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnuncioid', []);

        return parent::getAnuncioid();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalid(\AppBundle\Entity\Local $localid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalid', [$localid]);

        return parent::setLocalid($localid);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalid', []);

        return parent::getLocalid();
    }

}
