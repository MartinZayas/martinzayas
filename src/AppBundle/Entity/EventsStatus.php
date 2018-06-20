<?php

namespace AppBundle\Entity;

/**
 * EventsStatus
 */
class EventsStatus
{
    /**
     * @var string
     */
    private $names;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set names
     *
     * @param string $names
     *
     * @return EventsStatus
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Get names
     *
     * @return string
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return EventsStatus
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

