<?php

namespace AppBundle\Entity;

/**
 * AlbumsBuyLinks
 */
class AlbumsBuyLinks
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Albums
     */
    private $album;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return AlbumsBuyLinks
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return AlbumsBuyLinks
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set album
     *
     * @param \AppBundle\Entity\Albums $album
     *
     * @return AlbumsBuyLinks
     */
    public function setAlbum(\AppBundle\Entity\Albums $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \AppBundle\Entity\Albums
     */
    public function getAlbum()
    {
        return $this->album;
    }
}

