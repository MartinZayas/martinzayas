<?php

namespace AppBundle\Entity;

/**
 * ProfessionalsVideos
 */
class ProfessionalsVideos
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
     * @var \AppBundle\Entity\Professionals
     */
    private $professional;


    /**
     * Set video
     *
     * @param string $video
     *
     * @return ProfessionalsVideos
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
     * @return ProfessionalsVideos
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
     * @return ProfessionalsVideos
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
     * @return ProfessionalsVideos
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
     * Set professional
     *
     * @param \AppBundle\Entity\Professionals $professional
     *
     * @return ProfessionalsVideos
     */
    public function setProfessional(\AppBundle\Entity\Professionals $professional = null)
    {
        $this->professional = $professional;

        return $this;
    }

    /**
     * Get professional
     *
     * @return \AppBundle\Entity\Professionals
     */
    public function getProfessional()
    {
        return $this->professional;
    }
}

