<?php

namespace AppBundle\Entity;

/**
 * CaracteristicaLocal
 */
class CaracteristicaLocal
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
    private $localid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->localid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return CaracteristicaLocal
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
     * @return CaracteristicaLocal
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
     * Add localid
     *
     * @param \AppBundle\Entity\Local $localid
     *
     * @return CaracteristicaLocal
     */
    public function addLocalid(\AppBundle\Entity\Local $localid)
    {
        $this->localid[] = $localid;

        return $this;
    }

    /**
     * Remove localid
     *
     * @param \AppBundle\Entity\Local $localid
     */
    public function removeLocalid(\AppBundle\Entity\Local $localid)
    {
        $this->localid->removeElement($localid);
    }

    /**
     * Get localid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocalid()
    {
        return $this->localid;
    }
}

