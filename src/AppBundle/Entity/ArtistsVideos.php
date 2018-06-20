<?php

namespace AppBundle\Entity;

/**
 * ArtistsVideos
 */
class ArtistsVideos
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
     * @var \AppBundle\Entity\Artists
     */
    private $artist;


    /**
     * Set video
     *
     * @param string $video
     *
     * @return ArtistsVideos
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
     * @return ArtistsVideos
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
     * @return ArtistsVideos
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
     * @return ArtistsVideos
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
     * Set artist
     *
     * @param \AppBundle\Entity\Artists $artist
     *
     * @return ArtistsVideos
     */
    public function setArtist(\AppBundle\Entity\Artists $artist = null)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return \AppBundle\Entity\Artists
     */
    public function getArtist()
    {
        return $this->artist;
    }
}

