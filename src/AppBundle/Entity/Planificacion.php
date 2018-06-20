<?php

namespace AppBundle\Entity;

/**
 * Planificacion
 */
class Planificacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $tipo;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var boolean
     */
    private $excepcion;

    /**
     * @var \AppBundle\Entity\DiaSemanaLocal
     */
    private $diaSemanaLocal;


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
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return Planificacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Planificacion
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set excepcion
     *
     * @param boolean $excepcion
     *
     * @return Planificacion
     */
    public function setExcepcion($excepcion)
    {
        $this->excepcion = $excepcion;

        return $this;
    }

    /**
     * Get excepcion
     *
     * @return boolean
     */
    public function getExcepcion()
    {
        return $this->excepcion;
    }

    /**
     * Set diaSemanaLocal
     *
     * @param \AppBundle\Entity\DiaSemanaLocal $diaSemanaLocal
     *
     * @return Planificacion
     */
    public function setDiaSemanaLocal(\AppBundle\Entity\DiaSemanaLocal $diaSemanaLocal = null)
    {
        $this->diaSemanaLocal = $diaSemanaLocal;

        return $this;
    }

    /**
     * Get diaSemanaLocal
     *
     * @return \AppBundle\Entity\DiaSemanaLocal
     */
    public function getDiaSemanaLocal()
    {
        return $this->diaSemanaLocal;
    }
}

