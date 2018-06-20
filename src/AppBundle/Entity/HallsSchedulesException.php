<?php

namespace AppBundle\Entity;

/**
 * HallsSchedulesException
 */
class HallsSchedulesException
{
    /**
     * @var boolean
     */
    private $open;

    /**
     * @var boolean
     */
    private $day;

    /**
     * @var boolean
     */
    private $month;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var \DateTime
     */
    private $endTime;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\HallsConcerts
     */
    private $hall;


    /**
     * Set open
     *
     * @param boolean $open
     *
     * @return HallsSchedulesException
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return boolean
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set day
     *
     * @param boolean $day
     *
     * @return HallsSchedulesException
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return boolean
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set month
     *
     * @param boolean $month
     *
     * @return HallsSchedulesException
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return boolean
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return HallsSchedulesException
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
     * @return HallsSchedulesException
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
     * Set price
     *
     * @param string $price
     *
     * @return HallsSchedulesException
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
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
     * Set hall
     *
     * @param \AppBundle\Entity\HallsConcerts $hall
     *
     * @return HallsSchedulesException
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

