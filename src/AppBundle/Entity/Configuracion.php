<?php

namespace AppBundle\Entity;

/**
 * Configuracion
 */
class Configuracion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $emailAdmin;

    /**
     * @var integer
     */
    private $comisionEvento;

    /**
     * @var integer
     */
    private $minimoComision;

    /**
     * @var integer
     */
    private $duracionAnuncios;


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
     * Set emailAdmin
     *
     * @param string $emailAdmin
     *
     * @return Configuracion
     */
    public function setEmailAdmin($emailAdmin)
    {
        $this->emailAdmin = $emailAdmin;

        return $this;
    }

    /**
     * Get emailAdmin
     *
     * @return string
     */
    public function getEmailAdmin()
    {
        return $this->emailAdmin;
    }

    /**
     * Set comisionEvento
     *
     * @param integer $comisionEvento
     *
     * @return Configuracion
     */
    public function setComisionEvento($comisionEvento)
    {
        $this->comisionEvento = $comisionEvento;

        return $this;
    }

    /**
     * Get comisionEvento
     *
     * @return integer
     */
    public function getComisionEvento()
    {
        return $this->comisionEvento;
    }

    /**
     * Set minimoComision
     *
     * @param integer $minimoComision
     *
     * @return Configuracion
     */
    public function setMinimoComision($minimoComision)
    {
        $this->minimoComision = $minimoComision;

        return $this;
    }

    /**
     * Get minimoComision
     *
     * @return integer
     */
    public function getMinimoComision()
    {
        return $this->minimoComision;
    }

    /**
     * Set duracionAnuncios
     *
     * @param integer $duracionAnuncios
     *
     * @return Configuracion
     */
    public function setDuracionAnuncios($duracionAnuncios)
    {
        $this->duracionAnuncios = $duracionAnuncios;

        return $this;
    }

    /**
     * Get duracionAnuncios
     *
     * @return integer
     */
    public function getDuracionAnuncios()
    {
        return $this->duracionAnuncios;
    }
}

