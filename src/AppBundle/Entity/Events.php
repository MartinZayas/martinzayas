<?php

namespace AppBundle\Entity;

/**
 * Events
 */
class Events
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var \DateTime
     */
    private $endTime;

    /**
     * @var boolean
     */
    private $daysSale;

    /**
     * @var \DateTime
     */
    private $startDateSale;

    /**
     * @var string
     */
    private $minTickets;

    /**
     * @var boolean
     */
    private $free;

    /**
     * @var string
     */
    private $priceTicket;

    /**
     * @var string
     */
    private $priceTicketOffice;

    /**
     * @var boolean
     */
    private $commission;

    /**
     * @var boolean
     */
    private $minConsumption;

    /**
     * @var string
     */
    private $cover;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var boolean
     */
    private $hallPercent;

    /**
     * @var boolean
     */
    private $hallConfirmed;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\EventsStatus
     */
    private $status;

    /**
     * @var \AppBundle\Entity\HallsConcerts
     */
    private $hall;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Events
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
     * Set description
     *
     * @param string $description
     *
     * @return Events
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Events
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Events
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set daysSale
     *
     * @param boolean $daysSale
     *
     * @return Events
     */
    public function setDaysSale($daysSale)
    {
        $this->daysSale = $daysSale;

        return $this;
    }

    /**
     * Get daysSale
     *
     * @return boolean
     */
    public function getDaysSale()
    {
        return $this->daysSale;
    }

    /**
     * Set startDateSale
     *
     * @param \DateTime $startDateSale
     *
     * @return Events
     */
    public function setStartDateSale($startDateSale)
    {
        $this->startDateSale = $startDateSale;

        return $this;
    }

    /**
     * Get startDateSale
     *
     * @return \DateTime
     */
    public function getStartDateSale()
    {
        return $this->startDateSale;
    }

    /**
     * Set minTickets
     *
     * @param string $minTickets
     *
     * @return Events
     */
    public function setMinTickets($minTickets)
    {
        $this->minTickets = $minTickets;

        return $this;
    }

    /**
     * Get minTickets
     *
     * @return string
     */
    public function getMinTickets()
    {
        return $this->minTickets;
    }

    /**
     * Set free
     *
     * @param boolean $free
     *
     * @return Events
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get free
     *
     * @return boolean
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Set priceTicket
     *
     * @param string $priceTicket
     *
     * @return Events
     */
    public function setPriceTicket($priceTicket)
    {
        $this->priceTicket = $priceTicket;

        return $this;
    }

    /**
     * Get priceTicket
     *
     * @return string
     */
    public function getPriceTicket()
    {
        return $this->priceTicket;
    }

    /**
     * Set priceTicketOffice
     *
     * @param string $priceTicketOffice
     *
     * @return Events
     */
    public function setPriceTicketOffice($priceTicketOffice)
    {
        $this->priceTicketOffice = $priceTicketOffice;

        return $this;
    }

    /**
     * Get priceTicketOffice
     *
     * @return string
     */
    public function getPriceTicketOffice()
    {
        return $this->priceTicketOffice;
    }

    /**
     * Set commission
     *
     * @param boolean $commission
     *
     * @return Events
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return boolean
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set minConsumption
     *
     * @param boolean $minConsumption
     *
     * @return Events
     */
    public function setMinConsumption($minConsumption)
    {
        $this->minConsumption = $minConsumption;

        return $this;
    }

    /**
     * Get minConsumption
     *
     * @return boolean
     */
    public function getMinConsumption()
    {
        return $this->minConsumption;
    }

    /**
     * Set cover
     *
     * @param string $cover
     *
     * @return Events
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Events
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
     * Set hallPercent
     *
     * @param boolean $hallPercent
     *
     * @return Events
     */
    public function setHallPercent($hallPercent)
    {
        $this->hallPercent = $hallPercent;

        return $this;
    }

    /**
     * Get hallPercent
     *
     * @return boolean
     */
    public function getHallPercent()
    {
        return $this->hallPercent;
    }

    /**
     * Set hallConfirmed
     *
     * @param boolean $hallConfirmed
     *
     * @return Events
     */
    public function setHallConfirmed($hallConfirmed)
    {
        $this->hallConfirmed = $hallConfirmed;

        return $this;
    }

    /**
     * Get hallConfirmed
     *
     * @return boolean
     */
    public function getHallConfirmed()
    {
        return $this->hallConfirmed;
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
     * Set status
     *
     * @param \AppBundle\Entity\EventsStatus $status
     *
     * @return Events
     */
    public function setStatus(\AppBundle\Entity\EventsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\EventsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set hall
     *
     * @param \AppBundle\Entity\HallsConcerts $hall
     *
     * @return Events
     */
    public function setHall(\AppBundle\Entity\HallsConcerts $hall = null)
    {
        $this->hall = $hall;

        return $this;
    }

    /**
     * Get hall
     *
     * @return \AppBundle\Entity\HallsConcerts
     */
    public function getHall()
    {
        return $this->hall;
    }
}

