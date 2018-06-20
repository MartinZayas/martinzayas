<?php

namespace AppBundle\Entity;

/**
 * EventsPrivateMessages
 */
class EventsPrivateMessages
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $image;

    /**
     * @var boolean
     */
    private $readed;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $receiver;

    /**
     * @var \AppBundle\Entity\Events
     */
    private $event;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $emitter;


    /**
     * Set message
     *
     * @param string $message
     *
     * @return EventsPrivateMessages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return EventsPrivateMessages
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return EventsPrivateMessages
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set readed
     *
     * @param boolean $readed
     *
     * @return EventsPrivateMessages
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return boolean
     */
    public function getReaded()
    {
        return $this->readed;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EventsPrivateMessages
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * Set receiver
     *
     * @param \AppBundle\Entity\Users $receiver
     *
     * @return EventsPrivateMessages
     */
    public function setReceiver(\AppBundle\Entity\Users $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \AppBundle\Entity\Users
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set event
     *
     * @param \AppBundle\Entity\Events $event
     *
     * @return EventsPrivateMessages
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
     * Set emitter
     *
     * @param \AppBundle\Entity\Users $emitter
     *
     * @return EventsPrivateMessages
     */
    public function setEmitter(\AppBundle\Entity\Users $emitter = null)
    {
        $this->emitter = $emitter;

        return $this;
    }

    /**
     * Get emitter
     *
     * @return \AppBundle\Entity\Users
     */
    public function getEmitter()
    {
        return $this->emitter;
    }
}

