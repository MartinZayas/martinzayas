<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Estilo extends \AppBundle\Entity\Estilo implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'slug', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'albumid', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'artistaid', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'eventoid', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'localid'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'slug', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'albumid', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'artistaid', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'eventoid', '' . "\0" . 'AppBundle\\Entity\\Estilo' . "\0" . 'localid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Estilo $proxy) {
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
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function addAlbumid(\AppBundle\Entity\Album $albumid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAlbumid', [$albumid]);

        return parent::addAlbumid($albumid);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAlbumid(\AppBundle\Entity\Album $albumid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAlbumid', [$albumid]);

        return parent::removeAlbumid($albumid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlbumid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlbumid', []);

        return parent::getAlbumid();
    }

    /**
     * {@inheritDoc}
     */
    public function addArtistaid(\AppBundle\Entity\Artista $artistaid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArtistaid', [$artistaid]);

        return parent::addArtistaid($artistaid);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArtistaid(\AppBundle\Entity\Artista $artistaid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArtistaid', [$artistaid]);

        return parent::removeArtistaid($artistaid);
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
    public function addEventoid(\AppBundle\Entity\Evento $eventoid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEventoid', [$eventoid]);

        return parent::addEventoid($eventoid);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEventoid(\AppBundle\Entity\Evento $eventoid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEventoid', [$eventoid]);

        return parent::removeEventoid($eventoid);
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
    public function addLocalid(\AppBundle\Entity\Local $localid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLocalid', [$localid]);

        return parent::addLocalid($localid);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLocalid(\AppBundle\Entity\Local $localid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLocalid', [$localid]);

        return parent::removeLocalid($localid);
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
