<?php

namespace AppBundle\Entity;

/**
 * Payments
 */
class Payments
{
    /**
     * @var string
     */
    private $transaction;

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
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $user;

    /**
     * @var \AppBundle\Entity\PaymentsTypes
     */
    private $type;

    /**
     * @var \AppBundle\Entity\PaymentsStatus
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Events
     */
    private $event;


    /**
     * Set transaction
     *
     * @param string $transaction
     *
     * @return Payments
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Payments
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
     * @return Payments
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
     * @return Payments
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
     * Set user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Payments
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
     * Set type
     *
     * @param \AppBundle\Entity\PaymentsTypes $type
     *
     * @return Payments
     */
    public function setType(\AppBundle\Entity\PaymentsTypes $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\PaymentsTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\PaymentsStatus $status
     *
     * @return Payments
     */
    public function setStatus(\AppBundle\Entity\PaymentsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\PaymentsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set event
     *
     * @param \AppBundle\Entity\Events $event
     *
     * @return Payments
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

