<?php

namespace AppBundle\Entity;

/**
 * HallsConcerts
 */
class HallsConcerts
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nick;

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var integer
     */
    private $cacheMin;

    /**
     * @var integer
     */
    private $yearOpening;

    /**
     * @var integer
     */
    private $monthOpening;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $technicalData;

    /**
     * @var string
     */
    private $howToGet;

    /**
     * @var string
     */
    private $map;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $user;

    /**
     * @var \AppBundle\Entity\HallsTypes
     */
    private $type;

    /**
     * @var \AppBundle\Entity\HallsStatus
     */
    private $status;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return HallsConcerts
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
     * Set nick
     *
     * @param string $nick
     *
     * @return HallsConcerts
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return HallsConcerts
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set cacheMin
     *
     * @param integer $cacheMin
     *
     * @return HallsConcerts
     */
    public function setCacheMin($cacheMin)
    {
        $this->cacheMin = $cacheMin;

        return $this;
    }

    /**
     * Get cacheMin
     *
     * @return integer
     */
    public function getCacheMin()
    {
        return $this->cacheMin;
    }

    /**
     * Set yearOpening
     *
     * @param integer $yearOpening
     *
     * @return HallsConcerts
     */
    public function setYearOpening($yearOpening)
    {
        $this->yearOpening = $yearOpening;

        return $this;
    }

    /**
     * Get yearOpening
     *
     * @return integer
     */
    public function getYearOpening()
    {
        return $this->yearOpening;
    }

    /**
     * Set monthOpening
     *
     * @param integer $monthOpening
     *
     * @return HallsConcerts
     */
    public function setMonthOpening($monthOpening)
    {
        $this->monthOpening = $monthOpening;

        return $this;
    }

    /**
     * Get monthOpening
     *
     * @return integer
     */
    public function getMonthOpening()
    {
        return $this->monthOpening;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return HallsConcerts
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
     * Set technicalData
     *
     * @param string $technicalData
     *
     * @return HallsConcerts
     */
    public function setTechnicalData($technicalData)
    {
        $this->technicalData = $technicalData;

        return $this;
    }

    /**
     * Get technicalData
     *
     * @return string
     */
    public function getTechnicalData()
    {
        return $this->technicalData;
    }

    /**
     * Set howToGet
     *
     * @param string $howToGet
     *
     * @return HallsConcerts
     */
    public function setHowToGet($howToGet)
    {
        $this->howToGet = $howToGet;

        return $this;
    }

    /**
     * Get howToGet
     *
     * @return string
     */
    public function getHowToGet()
    {
        return $this->howToGet;
    }

    /**
     * Set map
     *
     * @param string $map
     *
     * @return HallsConcerts
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
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
     * @return HallsConcerts
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
     * @param \AppBundle\Entity\HallsTypes $type
     *
     * @return HallsConcerts
     */
    public function setType(\AppBundle\Entity\HallsTypes $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\HallsTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\HallsStatus $status
     *
     * @return HallsConcerts
     */
    public function setStatus(\AppBundle\Entity\HallsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\HallsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
}

