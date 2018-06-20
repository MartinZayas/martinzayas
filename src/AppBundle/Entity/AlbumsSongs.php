<?php

namespace AppBundle\Entity;

/**
 * AlbumsSongs
 */
class AlbumsSongs
{
    /**
     * @var string
     */
    private $track;

    /**
     * @var string
     */
    private $song;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Albums
     */
    private $album;


    /**
     * Set track
     *
     * @param string $track
     *
     * @return AlbumsSongs
     */
    public function setTrack($track)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Set song
     *
     * @param string $song
     *
     * @return AlbumsSongs
     */
    public function setSong($song)
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Get song
     *
     * @return string
     */
    public function getSong()
    {
        return $this->song;
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
     * Set album
     *
     * @param \AppBundle\Entity\Albums $album
     *
     * @return AlbumsSongs
     */
    public function setAlbum(\AppBundle\Entity\Albums $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \AppBundle\Entity\Albums
     */
    public function getAlbum()
    {
        return $this->album;
    }
}

