<?php

namespace AppBundle\Entity;

/**
 * Artista
 */
class Artista
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var integer
     */
    private $cacheMax;

    /**
     * @var integer
     */
    private $cacheMin;

    /**
     * @var string
     */
    private $video;

    /**
     * @var integer
     */
    private $experiencia;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $perfilMusica;

    /**
     * @var \AppBundle\Entity\DatosFacturacion
     */
    private $datosFacturacionid;

    /**
     * @var \AppBundle\Entity\TipoArtista
     */
    private $tipoArtistaid;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $usuarioid;

    /**
     * @var \AppBundle\Entity\Contacto
     */
    private $contactoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estiloid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estiloid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Artista
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Artista
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set cacheMax
     *
     * @param integer $cacheMax
     *
     * @return Artista
     */
    public function setCacheMax($cacheMax)
    {
        $this->cacheMax = $cacheMax;

        return $this;
    }

    /**
     * Get cacheMax
     *
     * @return integer
     */
    public function getCacheMax()
    {
        return $this->cacheMax;
    }

    /**
     * Set cacheMin
     *
     * @param integer $cacheMin
     *
     * @return Artista
     */
    public function setCacheMin($cacheMin)
    {
        $this->cacheMin = $cacheMin;

        return $this;
    }

    /**
     * Get cacheMin
     *
     * @return integer
     */
    public function getCacheMin()
    {
        return $this->cacheMin;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Artista
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set experiencia
     *
     * @param integer $experiencia
     *
     * @return Artista
     */
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }

    /**
     * Get experiencia
     *
     * @return integer
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Artista
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Artista
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set perfilMusica
     *
     * @param string $perfilMusica
     *
     * @return Artista
     */
    public function setPerfilMusica($perfilMusica)
    {
        $this->perfilMusica = $perfilMusica;

        return $this;
    }

    /**
     * Get perfilMusica
     *
     * @return string
     */
    public function getPerfilMusica()
    {
        return $this->perfilMusica;
    }

    /**
     * Set datosFacturacionid
     *
     * @param \AppBundle\Entity\DatosFacturacion $datosFacturacionid
     *
     * @return Artista
     */
    public function setDatosFacturacionid(\AppBundle\Entity\DatosFacturacion $datosFacturacionid = null)
    {
        $this->datosFacturacionid = $datosFacturacionid;

        return $this;
    }

    /**
     * Get datosFacturacionid
     *
     * @return \AppBundle\Entity\DatosFacturacion
     */
    public function getDatosFacturacionid()
    {
        return $this->datosFacturacionid;
    }

    /**
     * Set tipoArtistaid
     *
     * @param \AppBundle\Entity\TipoArtista $tipoArtistaid
     *
     * @return Artista
     */
    public function setTipoArtistaid(\AppBundle\Entity\TipoArtista $tipoArtistaid = null)
    {
        $this->tipoArtistaid = $tipoArtistaid;

        return $this;
    }

    /**
     * Get tipoArtistaid
     *
     * @return \AppBundle\Entity\TipoArtista
     */
    public function getTipoArtistaid()
    {
        return $this->tipoArtistaid;
    }

    /**
     * Set usuarioid
     *
     * @param \AppBundle\Entity\Usuarios $usuarioid
     *
     * @return Artista
     */
    public function setUsuarioid(\AppBundle\Entity\Usuarios $usuarioid = null)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * Set contactoid
     *
     * @param \AppBundle\Entity\Contacto $contactoid
     *
     * @return Artista
     */
    public function setContactoid(\AppBundle\Entity\Contacto $contactoid = null)
    {
        $this->contactoid = $contactoid;

        return $this;
    }

    /**
     * Get contactoid
     *
     * @return \AppBundle\Entity\Contacto
     */
    public function getContactoid()
    {
        return $this->contactoid;
    }

    /**
     * Add estiloid
     *
     * @param \AppBundle\Entity\Estilo $estiloid
     *
     * @return Artista
     */
    public function addEstiloid(\AppBundle\Entity\Estilo $estiloid)
    {
        $this->estiloid[] = $estiloid;

        return $this;
    }

    /**
     * Remove estiloid
     *
     * @param \AppBundle\Entity\Estilo $estiloid
     */
    public function removeEstiloid(\AppBundle\Entity\Estilo $estiloid)
    {
        $this->estiloid->removeElement($estiloid);
    }

    /**
     * Get estiloid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstiloid()
    {
        return $this->estiloid;
    }
}

