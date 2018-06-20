<?php

namespace AppBundle\Entity;

/**
 * EventsPhotos
 */
class EventsPhotos
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
     * @var \AppBundle\Entity\Events
     */
    private $event;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return EventsPhotos
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
     * @return EventsPhotos
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
     * @return EventsPhotos
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
     * @return EventsPhotos
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
     * Set event
     *
     * @param \AppBundle\Entity\Events $event
     *
     * @return EventsPhotos
     */
    public function setEvent(\AppBundle\Entity\Events $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AppBundle\Entity\Events
     */
    public function getEvent()
    {
        return $this->event;
    }
}

