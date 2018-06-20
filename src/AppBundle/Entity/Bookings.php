<?php

namespace AppBundle\Entity;

/**
 * Bookings
 */
class Bookings
{
    /**
     * @var integer
     */
    private $numTickets;

    /**
     * @var string
     */
    private $total;

    /**
     * @var string
     */
    private $rates;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $card;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $user;

    /**
     * @var \AppBundle\Entity\BookingsStatus
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Payments
     */
    private $payment;

    /**
     * @var \AppBundle\Entity\Events
     */
    private $event;


    /**
     * Set numTickets
     *
     * @param integer $numTickets
     *
     * @return Bookings
     */
    public function setNumTickets($numTickets)
    {
        $this->numTickets = $numTickets;

        return $this;
    }

    /**
     * Get numTickets
     *
     * @return integer
     */
    public function getNumTickets()
    {
        return $this->numTickets;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Bookings
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set rates
     *
     * @param string $rates
     *
     * @return Bookings
     */
    public function setRates($rates)
    {
        $this->rates = $rates;

        return $this;
    }

    /**
     * Get rates
     *
     * @return string
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Bookings
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
     * Set card
     *
     * @param string $card
     *
     * @return Bookings
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
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
     * Set user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Bookings
     */
    public function setUser(\AppBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\BookingsStatus $status
     *
     * @return Bookings
     */
    public function setStatus(\AppBundle\Entity\BookingsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\BookingsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set payment
     *
     * @param \AppBundle\Entity\Payments $payment
     *
     * @return Bookings
     */
    public function setPayment(\AppBundle\Entity\Payments $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \AppBundle\Entity\Payments
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set event
     *
     * @param \AppBundle\Entity\Events $event
     *
     * @return Bookings
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

