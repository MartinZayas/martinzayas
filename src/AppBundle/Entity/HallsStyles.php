<?php

namespace AppBundle\Entity;

/**
 * HallsStyles
 */
class HallsStyles
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
     * @var \AppBundle\Entity\HallsConcerts
     */
    private $hall;


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
     * @return HallsStyles
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
     * Set hall
     *
     * @param \AppBundle\Entity\HallsConcerts $hall
     *
     * @return HallsStyles
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

