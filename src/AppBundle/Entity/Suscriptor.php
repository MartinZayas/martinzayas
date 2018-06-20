<?php

namespace AppBundle\Entity;

/**
 * Suscriptor
 */
class Suscriptor
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
    private $email;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categoriaNewsletterid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoriaNewsletterid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Suscriptor
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
     * Set email
     *
     * @param string $email
     *
     * @return Suscriptor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Suscriptor
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Add categoriaNewsletterid
     *
     * @param \AppBundle\Entity\CategoriaNewsletter $categoriaNewsletterid
     *
     * @return Suscriptor
     */
    public function addCategoriaNewsletterid(\AppBundle\Entity\CategoriaNewsletter $categoriaNewsletterid)
    {
        $this->categoriaNewsletterid[] = $categoriaNewsletterid;

        return $this;
    }

    /**
     * Remove categoriaNewsletterid
     *
     * @param \AppBundle\Entity\CategoriaNewsletter $categoriaNewsletterid
     */
    public function removeCategoriaNewsletterid(\AppBundle\Entity\CategoriaNewsletter $categoriaNewsletterid)
    {
        $this->categoriaNewsletterid->removeElement($categoriaNewsletterid);
    }

    /**
     * Get categoriaNewsletterid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoriaNewsletterid()
    {
        return $this->categoriaNewsletterid;
    }
}

