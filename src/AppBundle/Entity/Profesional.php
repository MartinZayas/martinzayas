<?php

namespace AppBundle\Entity;

/**
 * Profesional
 */
class Profesional
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreComercio;

    /**
     * @var \DateTime
     */
    private $fechaNacimento;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $cif;

    /**
     * @var string
     */
    private $video;

    /**
     * @var \AppBundle\Entity\DatosFacturacion
     */
    private $datosFacturacionid;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $usuarioid;

    /**
     * @var \AppBundle\Entity\Contacto
     */
    private $contactoid;


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
     * Set nombreComercio
     *
     * @param string $nombreComercio
     *
     * @return Profesional
     */
    public function setNombreComercio($nombreComercio)
    {
        $this->nombreComercio = $nombreComercio;

        return $this;
    }

    /**
     * Get nombreComercio
     *
     * @return string
     */
    public function getNombreComercio()
    {
        return $this->nombreComercio;
    }

    /**
     * Set fechaNacimento
     *
     * @param \DateTime $fechaNacimento
     *
     * @return Profesional
     */
    public function setFechaNacimento($fechaNacimento)
    {
        $this->fechaNacimento = $fechaNacimento;

        return $this;
    }

    /**
     * Get fechaNacimento
     *
     * @return \DateTime
     */
    public function getFechaNacimento()
    {
        return $this->fechaNacimento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Profesional
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
     * Set cif
     *
     * @param string $cif
     *
     * @return Profesional
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Profesional
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
     * Set datosFacturacionid
     *
     * @param \AppBundle\Entity\DatosFacturacion $datosFacturacionid
     *
     * @return Profesional
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
     * Set usuarioid
     *
     * @param \AppBundle\Entity\Usuarios $usuarioid
     *
     * @return Profesional
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
     * @return Profesional
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
}

