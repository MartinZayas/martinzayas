<?php

namespace AppBundle\Entity;

/**
 * Notificacion
 */
class Notificacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mensaje;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $leida;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $usuarioid;

    /**
     * @var \AppBundle\Entity\TipoNotificacion
     */
    private $tipoNotificacionid;


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
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Notificacion
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Notificacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set leida
     *
     * @param boolean $leida
     *
     * @return Notificacion
     */
    public function setLeida($leida)
    {
        $this->leida = $leida;

        return $this;
    }

    /**
     * Get leida
     *
     * @return boolean
     */
    public function getLeida()
    {
        return $this->leida;
    }

    /**
     * Set usuarioid
     *
     * @param \AppBundle\Entity\Usuarios $usuarioid
     *
     * @return Notificacion
     */
    public function setUsuarioid(\AppBundle\Entity\Usuarios $usuarioid = null)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * Set tipoNotificacionid
     *
     * @param \AppBundle\Entity\TipoNotificacion $tipoNotificacionid
     *
     * @return Notificacion
     */
    public function setTipoNotificacionid(\AppBundle\Entity\TipoNotificacion $tipoNotificacionid = null)
    {
        $this->tipoNotificacionid = $tipoNotificacionid;

        return $this;
    }

    /**
     * Get tipoNotificacionid
     *
     * @return \AppBundle\Entity\TipoNotificacion
     */
    public function getTipoNotificacionid()
    {
        return $this->tipoNotificacionid;
    }
}

