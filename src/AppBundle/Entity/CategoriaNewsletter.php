<?php

namespace AppBundle\Entity;

/**
 * CategoriaNewsletter
 */
class CategoriaNewsletter
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
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $suscriptorid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->suscriptorid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return CategoriaNewsletter
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
     * Set slug
     *
     * @param string $slug
     *
     * @return CategoriaNewsletter
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add suscriptorid
     *
     * @param \AppBundle\Entity\Suscriptor $suscriptorid
     *
     * @return CategoriaNewsletter
     */
    public function addSuscriptorid(\AppBundle\Entity\Suscriptor $suscriptorid)
    {
        $this->suscriptorid[] = $suscriptorid;

        return $this;
    }

    /**
     * Remove suscriptorid
     *
     * @param \AppBundle\Entity\Suscriptor $suscriptorid
     */
    public function removeSuscriptorid(\AppBundle\Entity\Suscriptor $suscriptorid)
    {
        $this->suscriptorid->removeElement($suscriptorid);
    }

    /**
     * Get suscriptorid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuscriptorid()
    {
        return $this->suscriptorid;
    }
}

