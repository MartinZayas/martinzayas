<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Artista extends \AppBundle\Entity\Artista implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'fechaNacimiento', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'cacheMax', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'cacheMin', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'video', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'experiencia', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'iban', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'perfilMusica', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'datosFacturacionid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'tipoArtistaid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'usuarioid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'contactoid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'estiloid'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'fechaNacimiento', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'cacheMax', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'cacheMin', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'video', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'experiencia', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'iban', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'perfilMusica', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'datosFacturacionid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'tipoArtistaid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'usuarioid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'contactoid', '' . "\0" . 'AppBundle\\Entity\\Artista' . "\0" . 'estiloid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Artista $proxy) {
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
    public function setFechaNacimiento($fechaNacimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaNacimiento', [$fechaNacimiento]);

        return parent::setFechaNacimiento($fechaNacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaNacimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaNacimiento', []);

        return parent::getFechaNacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setCacheMax($cacheMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCacheMax', [$cacheMax]);

        return parent::setCacheMax($cacheMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheMax', []);

        return parent::getCacheMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setCacheMin($cacheMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCacheMin', [$cacheMin]);

        return parent::setCacheMin($cacheMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheMin', []);

        return parent::getCacheMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo($video)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperiencia($experiencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperiencia', [$experiencia]);

        return parent::setExperiencia($experiencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperiencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperiencia', []);

        return parent::getExperiencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIban($iban)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIban', [$iban]);

        return parent::setIban($iban);
    }

    /**
     * {@inheritDoc}
     */
    public function getIban()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIban', []);

        return parent::getIban();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerfilMusica($perfilMusica)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerfilMusica', [$perfilMusica]);

        return parent::setPerfilMusica($perfilMusica);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerfilMusica()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerfilMusica', []);

        return parent::getPerfilMusica();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatosFacturacionid(\AppBundle\Entity\DatosFacturacion $datosFacturacionid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatosFacturacionid', [$datosFacturacionid]);

        return parent::setDatosFacturacionid($datosFacturacionid);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatosFacturacionid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatosFacturacionid', []);

        return parent::getDatosFacturacionid();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoArtistaid(\AppBundle\Entity\TipoArtista $tipoArtistaid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoArtistaid', [$tipoArtistaid]);

        return parent::setTipoArtistaid($tipoArtistaid);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoArtistaid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoArtistaid', []);

        return parent::getTipoArtistaid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioid(\AppBundle\Entity\Usuarios $usuarioid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioid', [$usuarioid]);

        return parent::setUsuarioid($usuarioid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioid', []);

        return parent::getUsuarioid();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactoid(\AppBundle\Entity\Contacto $contactoid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactoid', [$contactoid]);

        return parent::setContactoid($contactoid);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactoid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactoid', []);

        return parent::getContactoid();
    }

    /**
     * {@inheritDoc}
     */
    public function addEstiloid(\AppBundle\Entity\Estilo $estiloid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEstiloid', [$estiloid]);

        return parent::addEstiloid($estiloid);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEstiloid(\AppBundle\Entity\Estilo $estiloid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEstiloid', [$estiloid]);

        return parent::removeEstiloid($estiloid);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstiloid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstiloid', []);

        return parent::getEstiloid();
    }

}