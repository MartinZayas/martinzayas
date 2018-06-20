<?php

namespace AppBundle\Entity;

/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $horaInicio;

    /**
     * @var \DateTime
     */
    private $horaFin;

    /**
     * @var \AppBundle\Entity\Planificacion
     */
    private $planificacion;

    /**
     * @var \AppBundle\Entity\Excepcion
     */
    private $excepcion;


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
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     *
     * @return Horario
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     *
     * @return Horario
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set planificacion
     *
     * @param \AppBundle\Entity\Planificacion $planificacion
     *
     * @return Horario
     */
    public function setPlanificacion(\AppBundle\Entity\Planificacion $planificacion = null)
    {
        $this->planificacion = $planificacion;

        return $this;
    }

    /**
     * Get planificacion
     *
     * @return \AppBundle\Entity\Planificacion
     */
    public function getPlanificacion()
    {
        return $this->planificacion;
    }

    /**
     * Set excepcion
     *
     * @param \AppBundle\Entity\Excepcion $excepcion
     *
     * @return Horario
     */
    public function setExcepcion(\AppBundle\Entity\Excepcion $excepcion = null)
    {
        $this->excepcion = $excepcion;

        return $this;
    }

    /**
     * Get excepcion
     *
     * @return \AppBundle\Entity\Excepcion
     */
    public function getExcepcion()
    {
        return $this->excepcion;
    }
}

