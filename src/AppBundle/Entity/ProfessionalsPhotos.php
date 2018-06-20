<?php

namespace AppBundle\Entity;

/**
 * ProfessionalsPhotos
 */
class ProfessionalsPhotos
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
     * @var \AppBundle\Entity\Professionals
     */
    private $professional;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return ProfessionalsPhotos
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
     * @return ProfessionalsPhotos
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
     * @return ProfessionalsPhotos
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
     * @return ProfessionalsPhotos
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
     * Set professional
     *
     * @param \AppBundle\Entity\Professionals $professional
     *
     * @return ProfessionalsPhotos
     */
    public function setProfessional(\AppBundle\Entity\Professionals $professional = null)
    {
        $this->professional = $professional;

        return $this;
    }

    /**
     * Get professional
     *
     * @return \AppBundle\Entity\Professionals
     */
    public function getProfessional()
    {
        return $this->professional;
    }
}

