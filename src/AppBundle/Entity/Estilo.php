<?php

namespace AppBundle\Entity;

/**
 * Estilo
 */
class Estilo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $albumid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $artistaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $localid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->albumid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->artistaid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Estilo
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Estilo
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
     * Add albumid
     *
     * @param \AppBundle\Entity\Album $albumid
     *
     * @return Estilo
     */
    public function addAlbumid(\AppBundle\Entity\Album $albumid)
    {
        $this->albumid[] = $albumid;

        return $this;
    }

    /**
     * Remove albumid
     *
     * @param \AppBundle\Entity\Album $albumid
     */
    public function removeAlbumid(\AppBundle\Entity\Album $albumid)
    {
        $this->albumid->removeElement($albumid);
    }

    /**
     * Get albumid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlbumid()
    {
        return $this->albumid;
    }

    /**
     * Add artistaid
     *
     * @param \AppBundle\Entity\Artista $artistaid
     *
     * @return Estilo
     */
    public function addArtistaid(\AppBundle\Entity\Artista $artistaid)
    {
        $this->artistaid[] = $artistaid;

        return $this;
    }

    /**
     * Remove artistaid
     *
     * @param \AppBundle\Entity\Artista $artistaid
     */
    public function removeArtistaid(\AppBundle\Entity\Artista $artistaid)
    {
        $this->artistaid->removeElement($artistaid);
    }

    /**
     * Get artistaid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtistaid()
    {
        return $this->artistaid;
    }

    /**
     * Add eventoid
     *
     * @param \AppBundle\Entity\Evento $eventoid
     *
     * @return Estilo
     */
    public function addEventoid(\AppBundle\Entity\Evento $eventoid)
    {
        $this->eventoid[] = $eventoid;

        return $this;
    }

    /**
     * Remove eventoid
     *
     * @param \AppBundle\Entity\Evento $eventoid
     */
    public function removeEventoid(\AppBundle\Entity\Evento $eventoid)
    {
        $this->eventoid->removeElement($eventoid);
    }

    /**
     * Get eventoid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventoid()
    {
        return $this->eventoid;
    }

    /**
     * Add localid
     *
     * @param \AppBundle\Entity\Local $localid
     *
     * @return Estilo
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

