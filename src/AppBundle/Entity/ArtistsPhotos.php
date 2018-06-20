<?php

namespace AppBundle\Entity;

/**
 * ArtistsPhotos
 */
class ArtistsPhotos
{
    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var boolean
     */
    private $featuredPhoto;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Artists
     */
    private $artist;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return ArtistsPhotos
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ArtistsPhotos
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
     * Set alt
     *
     * @param string $alt
     *
     * @return ArtistsPhotos
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set featuredPhoto
     *
     * @param boolean $featuredPhoto
     *
     * @return ArtistsPhotos
     */
    public function setFeaturedPhoto($featuredPhoto)
    {
        $this->featuredPhoto = $featuredPhoto;

        return $this;
    }

    /**
     * Get featuredPhoto
     *
     * @return boolean
     */
    public function getFeaturedPhoto()
    {
        return $this->featuredPhoto;
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
     * Set artist
     *
     * @param \AppBundle\Entity\Artists $artist
     *
     * @return ArtistsPhotos
     */
    public function setArtist(\AppBundle\Entity\Artists $artist = null)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return \AppBundle\Entity\Artists
     */
    public function getArtist()
    {
        return $this->artist;
    }
}

