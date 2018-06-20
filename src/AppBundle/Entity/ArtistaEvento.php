<?php

namespace AppBundle\Entity;

/**
 * ArtistaEvento
 */
class ArtistaEvento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $porciento;

    /**
     * @var float
     */
    private $total;

    /**
     * @var \AppBundle\Entity\Evento
     */
    private $eventoid;

    /**
     * @var \AppBundle\Entity\Artista
     */
    private $artistaid;


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
     * Set porciento
     *
     * @param float $porciento
     *
     * @return ArtistaEvento
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return float
     */
    public function getPorciento()
    {
        return $this->porciento;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return ArtistaEvento
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set eventoid
     *
     * @param \AppBundle\Entity\Evento $eventoid
     *
     * @return ArtistaEvento
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
     * @return ArtistaEvento
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
}

