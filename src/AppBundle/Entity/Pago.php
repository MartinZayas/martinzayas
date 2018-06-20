<?php

namespace AppBundle\Entity;

/**
 * Pago
 */
class Pago
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigo;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $subtotal;

    /**
     * @var string
     */
    private $idTransaccion;

    /**
     * @var boolean
     */
    private $credito;

    /**
     * @var \AppBundle\Entity\EstadoPago
     */
    private $estadoPagoid;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $usuarioid;

    /**
     * @var \AppBundle\Entity\Impuesto
     */
    private $impuestoid;

    /**
     * @var \AppBundle\Entity\ConceptoPago
     */
    private $conceptoPagoid;


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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Pago
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pago
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Pago
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     *
     * @return Pago
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set idTransaccion
     *
     * @param string $idTransaccion
     *
     * @return Pago
     */
    public function setIdTransaccion($idTransaccion)
    {
        $this->idTransaccion = $idTransaccion;

        return $this;
    }

    /**
     * Get idTransaccion
     *
     * @return string
     */
    public function getIdTransaccion()
    {
        return $this->idTransaccion;
    }

    /**
     * Set credito
     *
     * @param boolean $credito
     *
     * @return Pago
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return boolean
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set estadoPagoid
     *
     * @param \AppBundle\Entity\EstadoPago $estadoPagoid
     *
     * @return Pago
     */
    public function setEstadoPagoid(\AppBundle\Entity\EstadoPago $estadoPagoid = null)
    {
        $this->estadoPagoid = $estadoPagoid;

        return $this;
    }

    /**
     * Get estadoPagoid
     *
     * @return \AppBundle\Entity\EstadoPago
     */
    public function getEstadoPagoid()
    {
        return $this->estadoPagoid;
    }

    /**
     * Set usuarioid
     *
     * @param \AppBundle\Entity\Usuarios $usuarioid
     *
     * @return Pago
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
     * Set impuestoid
     *
     * @param \AppBundle\Entity\Impuesto $impuestoid
     *
     * @return Pago
     */
    public function setImpuestoid(\AppBundle\Entity\Impuesto $impuestoid = null)
    {
        $this->impuestoid = $impuestoid;

        return $this;
    }

    /**
     * Get impuestoid
     *
     * @return \AppBundle\Entity\Impuesto
     */
    public function getImpuestoid()
    {
        return $this->impuestoid;
    }

    /**
     * Set conceptoPagoid
     *
     * @param \AppBundle\Entity\ConceptoPago $conceptoPagoid
     *
     * @return Pago
     */
    public function setConceptoPagoid(\AppBundle\Entity\ConceptoPago $conceptoPagoid = null)
    {
        $this->conceptoPagoid = $conceptoPagoid;

        return $this;
    }

    /**
     * Get conceptoPagoid
     *
     * @return \AppBundle\Entity\ConceptoPago
     */
    public function getConceptoPagoid()
    {
        return $this->conceptoPagoid;
    }
}

