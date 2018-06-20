<?php

namespace AppBundle\Entity;

/**
 * Excepcion
 */
class Excepcion
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
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var \AppBundle\Entity\Local
     */
    private $local;


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
     * @return Excepcion
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Excepcion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Excepcion
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
     * Set local
     *
     * @param \AppBundle\Entity\Local $local
     *
     * @return Excepcion
     */
    public function setLocal(\AppBundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \AppBundle\Entity\Local
     */
    public function getLocal()
    {
        return $this->local;
    }
}

