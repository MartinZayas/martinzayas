<?php

namespace AppBundle\Entity;

/**
 * Imagen
 */
class Imagen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $destacada;

    /**
     * @var boolean
     */
    private $portada;

    /**
     * @var \AppBundle\Entity\Evento
     */
    private $eventoid;

    /**
     * @var \AppBundle\Entity\Artista
     */
    private $artistaid;

    /**
     * @var \AppBundle\Entity\Profesional
     */
    private $profesionalid;

    /**
     * @var \AppBundle\Entity\Anuncio
     */
    private $anuncioid;

    /**
     * @var \AppBundle\Entity\Local
     */
    private $localid;


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
     * Set url
     *
     * @param string $url
     *
     * @return Imagen
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Imagen
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Imagen
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set destacada
     *
     * @param boolean $destacada
     *
     * @return Imagen
     */
    public function setDestacada($destacada)
    {
        $this->destacada = $destacada;

        return $this;
    }

    /**
     * Get destacada
     *
     * @return boolean
     */
    public function getDestacada()
    {
        return $this->destacada;
    }

    /**
     * Set portada
     *
     * @param boolean $portada
     *
     * @return Imagen
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return boolean
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set eventoid
     *
     * @param \AppBundle\Entity\Evento $eventoid
     *
     * @return Imagen
     */
    public function setEventoid(\AppBundle\Entity\Evento $eventoid = null)
    {
        $this->eventoid = $eventoid;

        return $this;
    }

    /**
     * Get eventoid
     *
     * @return \AppBundle\Entity\Evento
     */
    public function getEventoid()
    {
        return $this->eventoid;
    }

    /**
     * Set artistaid
     *
     * @param \AppBundle\Entity\Artista $artistaid
     *
     * @return Imagen
     */
    public function setArtistaid(\AppBundle\Entity\Artista $artistaid = null)
    {
        $this->artistaid = $artistaid;

        return $this;
    }

    /**
     * Get artistaid
     *
     * @return \AppBundle\Entity\Artista
     */
    public function getArtistaid()
    {
        return $this->artistaid;
    }

    /**
     * Set profesionalid
     *
     * @param \AppBundle\Entity\Profesional $profesionalid
     *
     * @return Imagen
     */
    public function setProfesionalid(\AppBundle\Entity\Profesional $profesionalid = null)
    {
        $this->profesionalid = $profesionalid;

        return $this;
    }

    /**
     * Get profesionalid
     *
     * @return \AppBundle\Entity\Profesional
     */
    public function getProfesionalid()
    {
        return $this->profesionalid;
    }

    /**
     * Set anuncioid
     *
     * @param \AppBundle\Entity\Anuncio $anuncioid
     *
     * @return Imagen
     */
    public function setAnuncioid(\AppBundle\Entity\Anuncio $anuncioid = null)
    {
        $this->anuncioid = $anuncioid;

        return $this;
    }

    /**
     * Get anuncioid
     *
     * @return \AppBundle\Entity\Anuncio
     */
    public function getAnuncioid()
    {
        return $this->anuncioid;
    }

    /**
     * Set localid
     *
     * @param \AppBundle\Entity\Local $localid
     *
     * @return Imagen
     */
    public function setLocalid(\AppBundle\Entity\Local $localid = null)
    {
        $this->localid = $localid;

        return $this;
    }

    /**
     * Get localid
     *
     * @return \AppBundle\Entity\Local
     */
    public function getLocalid()
    {
        return $this->localid;
    }
}

