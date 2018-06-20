<?php

namespace AppBundle\Entity;

/**
 * HallsVideos
 */
class HallsVideos
{
    /**
     * @var string
     */
    private $video;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var boolean
     */
    private $featuredVideo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\HallsConcerts
     */
    private $hall;


    /**
     * Set video
     *
     * @param string $video
     *
     * @return HallsVideos
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return HallsVideos
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
     * Set alt
     *
     * @param string $alt
     *
     * @return HallsVideos
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set featuredVideo
     *
     * @param boolean $featuredVideo
     *
     * @return HallsVideos
     */
    public function setFeaturedVideo($featuredVideo)
    {
        $this->featuredVideo = $featuredVideo;

        return $this;
    }

    /**
     * Get featuredVideo
     *
     * @return boolean
     */
    public function getFeaturedVideo()
    {
        return $this->featuredVideo;
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
     * @return HallsVideos
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

