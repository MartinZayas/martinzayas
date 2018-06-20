<?php

namespace AppBundle\Entity;

/**
 * ArtistsStyles
 */
class ArtistsStyles
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Styles
     */
    private $style;

    /**
     * @var \AppBundle\Entity\Artists
     */
    private $artist;


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
     * Set style
     *
     * @param \AppBundle\Entity\Styles $style
     *
     * @return ArtistsStyles
     */
    public function setStyle(\AppBundle\Entity\Styles $style = null)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return \AppBundle\Entity\Styles
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set artist
     *
     * @param \AppBundle\Entity\Artists $artist
     *
     * @return ArtistsStyles
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

