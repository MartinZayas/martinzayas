<?php

namespace AppBundle\Entity;

/**
 * Ciudad
 */
class Ciudad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \AppBundle\Entity\Provincia
     */
    private $idprovincia;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Ciudad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idprovincia
     *
     * @param \AppBundle\Entity\Provincia $idprovincia
     *
     * @return Ciudad
     */
    public function setIdprovincia(\AppBundle\Entity\Provincia $idprovincia = null)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

    /**
     * Get idprovincia
     *
     * @return \AppBundle\Entity\Provincia
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }
}

