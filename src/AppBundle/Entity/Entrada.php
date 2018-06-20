<?php

namespace AppBundle\Entity;

/**
 * Entrada
 */
class Entrada
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoQr;

    /**
     * @var float
     */
    private $precioneto;

    /**
     * @var float
     */
    private $gastosgestion;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var boolean
     */
    private $consumominimo;

    /**
     * @var \AppBundle\Entity\Evento
     */
    private $eventoid;

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
     * Set codigoQr
     *
     * @param string $codigoQr
     *
     * @return Entrada
     */
    public function setCodigoQr($codigoQr)
    {
        $this->codigoQr = $codigoQr;

        return $this;
    }

    /**
     * Get codigoQr
     *
     * @return string
     */
    public function getCodigoQr()
    {
        return $this->codigoQr;
    }

    /**
     * Set precioneto
     *
     * @param float $precioneto
     *
     * @return Entrada
     */
    public function setPrecioneto($precioneto)
    {
        $this->precioneto = $precioneto;

        return $this;
    }

    /**
     * Get precioneto
     *
     * @return float
     */
    public function getPrecioneto()
    {
        return $this->precioneto;
    }

    /**
     * Set gastosgestion
     *
     * @param float $gastosgestion
     *
     * @return Entrada
     */
    public function setGastosgestion($gastosgestion)
    {
        $this->gastosgestion = $gastosgestion;

        return $this;
    }

    /**
     * Get gastosgestion
     *
     * @return float
     */
    public function getGastosgestion()
    {
        return $this->gastosgestion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Entrada
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set consumominimo
     *
     * @param boolean $consumominimo
     *
     * @return Entrada
     */
    public function setConsumominimo($consumominimo)
    {
        $this->consumominimo = $consumominimo;

        return $this;
    }

    /**
     * Get consumominimo
     *
     * @return boolean
     */
    public function getConsumominimo()
    {
        return $this->consumominimo;
    }

    /**
     * Set eventoid
     *
     * @param \AppBundle\Entity\Evento $eventoid
     *
     * @return Entrada
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
     * Set facturaid
     *
     * @param \AppBundle\Entity\Factura $facturaid
     *
     * @return Entrada
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

