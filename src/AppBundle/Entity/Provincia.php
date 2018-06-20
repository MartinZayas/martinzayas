<?php

namespace AppBundle\Entity;

/**
 * Provincia
 */
class Provincia
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
     * @var \AppBundle\Entity\Pais
     */
    private $idpais;


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
     * @return Provincia
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
     * Set idpais
     *
     * @param \AppBundle\Entity\Pais $idpais
     *
     * @return Provincia
     */
    public function setIdpais(\AppBundle\Entity\Pais $idpais = null)
    {
        $this->idpais = $idpais;

        return $this;
    }

    /**
     * Get idpais
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getIdpais()
    {
        return $this->idpais;
    }
}

