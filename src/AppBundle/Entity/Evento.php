<?php

namespace AppBundle\Entity;

/**
 * Evento
 */
class Evento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $horaInicio;

    /**
     * @var \DateTime
     */
    private $horaFin;

    /**
     * @var string
     */
    private $comentarios;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $diasVotacion;

    /**
     * @var \DateTime
     */
    private $fechaVotacion;

    /**
     * @var integer
     */
    private $minimoEntradas;

    /**
     * @var integer
     */
    private $maxEntradas;

    /**
     * @var boolean
     */
    private $gratuito;

    /**
     * @var string
     */
    private $precioEntrada;

    /**
     * @var float
     */
    private $porcientoLocal;

    /**
     * @var float
     */
    private $totallocal;

    /**
     * @var integer
     */
    private $votos;

    /**
     * @var float
     */
    private $comision;

    /**
     * @var float
     */
    private $total;

    /**
     * @var \AppBundle\Entity\EstadoEvento
     */
    private $estadoEventoid;

    /**
     * @var \AppBundle\Entity\Local
     */
    private $localid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estiloid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estiloid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Evento
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Evento
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     *
     * @return Evento
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
     * @return Evento
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
     * Set comentarios
     *
     * @param string $comentarios
     *
     * @return Evento
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Evento
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Evento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set diasVotacion
     *
     * @param integer $diasVotacion
     *
     * @return Evento
     */
    public function setDiasVotacion($diasVotacion)
    {
        $this->diasVotacion = $diasVotacion;

        return $this;
    }

    /**
     * Get diasVotacion
     *
     * @return integer
     */
    public function getDiasVotacion()
    {
        return $this->diasVotacion;
    }

    /**
     * Set fechaVotacion
     *
     * @param \DateTime $fechaVotacion
     *
     * @return Evento
     */
    public function setFechaVotacion($fechaVotacion)
    {
        $this->fechaVotacion = $fechaVotacion;

        return $this;
    }

    /**
     * Get fechaVotacion
     *
     * @return \DateTime
     */
    public function getFechaVotacion()
    {
        return $this->fechaVotacion;
    }

    /**
     * Set minimoEntradas
     *
     * @param integer $minimoEntradas
     *
     * @return Evento
     */
    public function setMinimoEntradas($minimoEntradas)
    {
        $this->minimoEntradas = $minimoEntradas;

        return $this;
    }

    /**
     * Get minimoEntradas
     *
     * @return integer
     */
    public function getMinimoEntradas()
    {
        return $this->minimoEntradas;
    }

    /**
     * Set maxEntradas
     *
     * @param integer $maxEntradas
     *
     * @return Evento
     */
    public function setMaxEntradas($maxEntradas)
    {
        $this->maxEntradas = $maxEntradas;

        return $this;
    }

    /**
     * Get maxEntradas
     *
     * @return integer
     */
    public function getMaxEntradas()
    {
        return $this->maxEntradas;
    }

    /**
     * Set gratuito
     *
     * @param boolean $gratuito
     *
     * @return Evento
     */
    public function setGratuito($gratuito)
    {
        $this->gratuito = $gratuito;

        return $this;
    }

    /**
     * Get gratuito
     *
     * @return boolean
     */
    public function getGratuito()
    {
        return $this->gratuito;
    }

    /**
     * Set precioEntrada
     *
     * @param string $precioEntrada
     *
     * @return Evento
     */
    public function setPrecioEntrada($precioEntrada)
    {
        $this->precioEntrada = $precioEntrada;

        return $this;
    }

    /**
     * Get precioEntrada
     *
     * @return string
     */
    public function getPrecioEntrada()
    {
        return $this->precioEntrada;
    }

    /**
     * Set porcientoLocal
     *
     * @param float $porcientoLocal
     *
     * @return Evento
     */
    public function setPorcientoLocal($porcientoLocal)
    {
        $this->porcientoLocal = $porcientoLocal;

        return $this;
    }

    /**
     * Get porcientoLocal
     *
     * @return float
     */
    public function getPorcientoLocal()
    {
        return $this->porcientoLocal;
    }

    /**
     * Set totallocal
     *
     * @param float $totallocal
     *
     * @return Evento
     */
    public function setTotallocal($totallocal)
    {
        $this->totallocal = $totallocal;

        return $this;
    }

    /**
     * Get totallocal
     *
     * @return float
     */
    public function getTotallocal()
    {
        return $this->totallocal;
    }

    /**
     * Set votos
     *
     * @param integer $votos
     *
     * @return Evento
     */
    public function setVotos($votos)
    {
        $this->votos = $votos;

        return $this;
    }

    /**
     * Get votos
     *
     * @return integer
     */
    public function getVotos()
    {
        return $this->votos;
    }

    /**
     * Set comision
     *
     * @param float $comision
     *
     * @return Evento
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return float
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Evento
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set estadoEventoid
     *
     * @param \AppBundle\Entity\EstadoEvento $estadoEventoid
     *
     * @return Evento
     */
    public function setEstadoEventoid(\AppBundle\Entity\EstadoEvento $estadoEventoid = null)
    {
        $this->estadoEventoid = $estadoEventoid;

        return $this;
    }

    /**
     * Get estadoEventoid
     *
     * @return \AppBundle\Entity\EstadoEvento
     */
    public function getEstadoEventoid()
    {
        return $this->estadoEventoid;
    }

    /**
     * Set localid
     *
     * @param \AppBundle\Entity\Local $localid
     *
     * @return Evento
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

    /**
     * Add estiloid
     *
     * @param \AppBundle\Entity\Estilo $estiloid
     *
     * @return Evento
     */
    public function addEstiloid(\AppBundle\Entity\Estilo $estiloid)
    {
        $this->estiloid[] = $estiloid;

        return $this;
    }

    /**
     * Remove estiloid
     *
     * @param \AppBundle\Entity\Estilo $estiloid
     */
    public function removeEstiloid(\AppBundle\Entity\Estilo $estiloid)
    {
        $this->estiloid->removeElement($estiloid);
    }

    /**
     * Get estiloid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstiloid()
    {
        return $this->estiloid;
    }
}

