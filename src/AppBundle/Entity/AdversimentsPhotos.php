<?php

namespace AppBundle\Entity;

/**
 * AdversimentsPhotos
 */
class AdversimentsPhotos
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
     * @var \AppBundle\Entity\Adversiments
     */
    private $adversiment;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return AdversimentsPhotos
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
     * @return AdversimentsPhotos
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
     * @return AdversimentsPhotos
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
     * @return AdversimentsPhotos
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
     * Set adversiment
     *
     * @param \AppBundle\Entity\Adversiments $adversiment
     *
     * @return AdversimentsPhotos
     */
    public function setAdversiment(\AppBundle\Entity\Adversiments $adversiment = null)
    {
        $this->adversiment = $adversiment;

        return $this;
    }

    /**
     * Get adversiment
     *
     * @return \AppBundle\Entity\Adversiments
     */
    public function getAdversiment()
    {
        return $this->adversiment;
    }
}

