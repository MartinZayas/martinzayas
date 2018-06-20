<?php

namespace AppBundle\Entity;

/**
 * HallsFeaturesOfHalls
 */
class HallsFeaturesOfHalls
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\HallsConcerts
     */
    private $hall;

    /**
     * @var \AppBundle\Entity\HallsFeatures
     */
    private $feature;


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
     * @return HallsFeaturesOfHalls
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

    /**
     * Set feature
     *
     * @param \AppBundle\Entity\HallsFeatures $feature
     *
     * @return HallsFeaturesOfHalls
     */
    public function setFeature(\AppBundle\Entity\HallsFeatures $feature = null)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return \AppBundle\Entity\HallsFeatures
     */
    public function getFeature()
    {
        return $this->feature;
    }
}

