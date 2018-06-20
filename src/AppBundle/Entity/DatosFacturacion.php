<?php

namespace AppBundle\Entity;

/**
 * DatosFacturacion
 */
class DatosFacturacion
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
     * @var string
     */
    private $cifNif;

    /**
     * @var \AppBundle\Entity\Direccion
     */
    private $direccionid;


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
     * @return DatosFacturacion
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
     * Set cifNif
     *
     * @param string $cifNif
     *
     * @return DatosFacturacion
     */
    public function setCifNif($cifNif)
    {
        $this->cifNif = $cifNif;

        return $this;
    }

    /**
     * Get cifNif
     *
     * @return string
     */
    public function getCifNif()
    {
        return $this->cifNif;
    }

    /**
     * Set direccionid
     *
     * @param \AppBundle\Entity\Direccion $direccionid
     *
     * @return DatosFacturacion
     */
    public function setDireccionid(\AppBundle\Entity\Direccion $direccionid = null)
    {
        $this->direccionid = $direccionid;

        return $this;
    }

    /**
     * Get direccionid
     *
     * @return \AppBundle\Entity\Direccion
     */
    public function getDireccionid()
    {
        return $this->direccionid;
    }
}

