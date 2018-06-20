<?php

namespace AppBundle\Entity;

/**
 * TemaAlbum
 */
class TemaAlbum
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
     * @var \AppBundle\Entity\Album
     */
    private $albumid;


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
     * @return TemaAlbum
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
     * @return TemaAlbum
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
     * Set albumid
     *
     * @param \AppBundle\Entity\Album $albumid
     *
     * @return TemaAlbum
     */
    public function setAlbumid(\AppBundle\Entity\Album $albumid = null)
    {
        $this->albumid = $albumid;

        return $this;
    }

    /**
     * Get albumid
     *
     * @return \AppBundle\Entity\Album
     */
    public function getAlbumid()
    {
        return $this->albumid;
    }
}

