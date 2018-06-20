<?php

namespace AppBundle\Entity;

/**
 * Factura
 */
class Factura
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $monto;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $numeroFactura;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $subtotal;

    /**
     * @var string
     */
    private $comision;

    /**
     * @var string
     */
    private $impuestoComision;

    /**
     * @var string
     */
    private $impuestoSubtotal;

    /**
     * @var \AppBundle\Entity\Pago
     */
    private $pagoid;

    /**
     * @var \AppBundle\Entity\Factura
     */
    private $facturaid;


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
     * Set monto
     *
     * @param string $monto
     *
     * @return Factura
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Factura
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
     * Set numeroFactura
     *
     * @param string $numeroFactura
     *
     * @return Factura
     */
    public function setNumeroFactura($numeroFactura)
    {
        $this->numeroFactura = $numeroFactura;

        return $this;
    }

    /**
     * Get numeroFactura
     *
     * @return string
     */
    public function getNumeroFactura()
    {
        return $this->numeroFactura;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Factura
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     *
     * @return Factura
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
     * Set comision
     *
     * @param string $comision
     *
     * @return Factura
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set impuestoComision
     *
     * @param string $impuestoComision
     *
     * @return Factura
     */
    public function setImpuestoComision($impuestoComision)
    {
        $this->impuestoComision = $impuestoComision;

        return $this;
    }

    /**
     * Get impuestoComision
     *
     * @return string
     */
    public function getImpuestoComision()
    {
        return $this->impuestoComision;
    }

    /**
     * Set impuestoSubtotal
     *
     * @param string $impuestoSubtotal
     *
     * @return Factura
     */
    public function setImpuestoSubtotal($impuestoSubtotal)
    {
        $this->impuestoSubtotal = $impuestoSubtotal;

        return $this;
    }

    /**
     * Get impuestoSubtotal
     *
     * @return string
     */
    public function getImpuestoSubtotal()
    {
        return $this->impuestoSubtotal;
    }

    /**
     * Set pagoid
     *
     * @param \AppBundle\Entity\Pago $pagoid
     *
     * @return Factura
     */
    public function setPagoid(\AppBundle\Entity\Pago $pagoid = null)
    {
        $this->pagoid = $pagoid;

        return $this;
    }

    /**
     * Get pagoid
     *
     * @return \AppBundle\Entity\Pago
     */
    public function getPagoid()
    {
        return $this->pagoid;
    }

    /**
     * Set facturaid
     *
     * @param \AppBundle\Entity\Factura $facturaid
     *
     * @return Factura
     */
    public function setFacturaid(\AppBundle\Entity\Factura $facturaid = null)
    {
        $this->facturaid = $facturaid;

        return $this;
    }

    /**
     * Get facturaid
     *
     * @return \AppBundle\Entity\Factura
     */
    public function getFacturaid()
    {
        return $this->facturaid;
    }
}

