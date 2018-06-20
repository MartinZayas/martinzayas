<?php

namespace AppBundle\Entity;

/**
 * HallsSchedules
 */
class HallsSchedules
{
    /**
     * @var boolean
     */
    private $open;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var \DateTime
     */
    private $endTime;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\HallsWeekdays
     */
    private $weekday;

    /**
     * @var \AppBundle\Entity\HallsConcerts
     */
    private $hall;


    /**
     * Set open
     *
     * @param boolean $open
     *
     * @return HallsSchedules
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
     * Set price
     *
     * @param string $price
     *
     * @return HallsSchedules
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return HallsSchedules
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
     * @return HallsSchedules
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set weekday
     *
     * @param \AppBundle\Entity\HallsWeekdays $weekday
     *
     * @return HallsSchedules
     */
    public function setWeekday(\AppBundle\Entity\HallsWeekdays $weekday = null)
    {
        $this->weekday = $weekday;

        return $this;
    }

    /**
     * Get weekday
     *
     * @return \AppBundle\Entity\HallsWeekdays
     */
    public function getWeekday()
    {
        return $this->weekday;
    }

    /**
     * Set hall
     *
     * @param \AppBundle\Entity\HallsConcerts $hall
     *
     * @return HallsSchedules
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

