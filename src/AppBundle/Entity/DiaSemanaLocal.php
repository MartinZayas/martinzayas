<?php

namespace AppBundle\Entity;

/**
 * DiaSemanaLocal
 */
class DiaSemanaLocal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\DiaSemana
     */
    private $diaSemanaid;

    /**
     * @var \AppBundle\Entity\Local
     */
    private $localid;


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
     * Set diaSemanaid
     *
     * @param \AppBundle\Entity\DiaSemana $diaSemanaid
     *
     * @return DiaSemanaLocal
     */
    public function setDiaSemanaid(\AppBundle\Entity\DiaSemana $diaSemanaid = null)
    {
        $this->diaSemanaid = $diaSemanaid;

        return $this;
    }

    /**
     * Get diaSemanaid
     *
     * @return \AppBundle\Entity\DiaSemana
     */
    public function getDiaSemanaid()
    {
        return $this->diaSemanaid;
    }

    /**
     * Set localid
     *
     * @param \AppBundle\Entity\Local $localid
     *
     * @return DiaSemanaLocal
     */
    public function setLocalid(\AppBundle\Entity\Local $localid = null)
    {
        $this->localid = $localid;

        return $this;
    }

    /**
     * Get localid
     *
     * @return \AppBundle\Entity\Local
     */
    public function getLocalid()
    {
        return $this->localid;
    }
}

