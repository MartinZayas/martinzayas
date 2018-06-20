<?php

namespace AppBundle\Entity;

/**
 * Tickets
 */
class Tickets
{
    /**
     * @var string
     */
    private $codeQr;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Payments
     */
    private $payment;

    /**
     * @var \AppBundle\Entity\Events
     */
    private $event;


    /**
     * Set codeQr
     *
     * @param string $codeQr
     *
     * @return Tickets
     */
    public function setCodeQr($codeQr)
    {
        $this->codeQr = $codeQr;

        return $this;
    }

    /**
     * Get codeQr
     *
     * @return string
     */
    public function getCodeQr()
    {
        return $this->codeQr;
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
     * Set payment
     *
     * @param \AppBundle\Entity\Payments $payment
     *
     * @return Tickets
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
     * @return Tickets
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

