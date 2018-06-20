<?php

namespace AppBundle\Entity;

/**
 * EventArtist
 */
class EventArtist
{
    /**
     * @var boolean
     */
    private $percent;

    /**
     * @var boolean
     */
    private $confirmed;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Events
     */
    private $event;

    /**
     * @var \AppBundle\Entity\Artists
     */
    private $artist;


    /**
     * Set percent
     *
     * @param boolean $percent
     *
     * @return EventArtist
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return boolean
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     *
     * @return EventArtist
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean
     */
    public function getConfirmed()
    {
        return $this->confirmed;
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
     * @return EventArtist
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

    /**
     * Set artist
     *
     * @param \AppBundle\Entity\Artists $artist
     *
     * @return EventArtist
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

