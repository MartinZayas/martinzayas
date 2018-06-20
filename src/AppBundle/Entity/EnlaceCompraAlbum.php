<?php

namespace AppBundle\Entity;

/**
 * EnlaceCompraAlbum
 */
class EnlaceCompraAlbum
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
    private $url;

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
     * @return EnlaceCompraAlbum
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
     * Set url
     *
     * @param string $url
     *
     * @return EnlaceCompraAlbum
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set albumid
     *
     * @param \AppBundle\Entity\Album $albumid
     *
     * @return EnlaceCompraAlbum
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

