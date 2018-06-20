<?php

namespace AppBundle\Entity;

/**
 * Mensaje
 */
class Mensaje
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
    private $leido;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $remitente;

    /**
     * @var \AppBundle\Entity\Evento
     */
    private $eventoid;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $destinatario;


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
     * @return Mensaje
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
     * @return Mensaje
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
     * Set leido
     *
     * @param boolean $leido
     *
     * @return Mensaje
     */
    public function setLeido($leido)
    {
        $this->leido = $leido;

        return $this;
    }

    /**
     * Get leido
     *
     * @return boolean
     */
    public function getLeido()
    {
        return $this->leido;
    }

    /**
     * Set remitente
     *
     * @param \AppBundle\Entity\Usuarios $remitente
     *
     * @return Mensaje
     */
    public function setRemitente(\AppBundle\Entity\Usuarios $remitente = null)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set eventoid
     *
     * @param \AppBundle\Entity\Evento $eventoid
     *
     * @return Mensaje
     */
    public function setEventoid(\AppBundle\Entity\Evento $eventoid = null)
    {
        $this->eventoid = $eventoid;

        return $this;
    }

    /**
     * Get eventoid
     *
     * @return \AppBundle\Entity\Evento
     */
    public function getEventoid()
    {
        return $this->eventoid;
    }

    /**
     * Set destinatario
     *
     * @param \AppBundle\Entity\Usuarios $destinatario
     *
     * @return Mensaje
     */
    public function setDestinatario(\AppBundle\Entity\Usuarios $destinatario = null)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}

