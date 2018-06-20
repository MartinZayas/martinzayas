<?php

namespace AppBundle\Entity;

/**
 * Anuncio
 */
class Anuncio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var \DateTime
     */
    private $fechaPublicacion;

    /**
     * @var \DateTime
     */
    private $fechaExpiracion;

    /**
     * @var \AppBundle\Entity\EstadoAnuncio
     */
    private $estadoAnuncioid;

    /**
     * @var \AppBundle\Entity\Profesional
     */
    private $profesionalid;

    /**
     * @var \AppBundle\Entity\CategoriaAnuncio
     */
    private $categoriaAnuncioid;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Anuncio
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Anuncio
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
     * Set precio
     *
     * @param string $precio
     *
     * @return Anuncio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     *
     * @return Anuncio
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set fechaExpiracion
     *
     * @param \DateTime $fechaExpiracion
     *
     * @return Anuncio
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;

        return $this;
    }

    /**
     * Get fechaExpiracion
     *
     * @return \DateTime
     */
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * Set estadoAnuncioid
     *
     * @param \AppBundle\Entity\EstadoAnuncio $estadoAnuncioid
     *
     * @return Anuncio
     */
    public function setEstadoAnuncioid(\AppBundle\Entity\EstadoAnuncio $estadoAnuncioid = null)
    {
        $this->estadoAnuncioid = $estadoAnuncioid;

        return $this;
    }

    /**
     * Get estadoAnuncioid
     *
     * @return \AppBundle\Entity\EstadoAnuncio
     */
    public function getEstadoAnuncioid()
    {
        return $this->estadoAnuncioid;
    }

    /**
     * Set profesionalid
     *
     * @param \AppBundle\Entity\Profesional $profesionalid
     *
     * @return Anuncio
     */
    public function setProfesionalid(\AppBundle\Entity\Profesional $profesionalid = null)
    {
        $this->profesionalid = $profesionalid;

        return $this;
    }

    /**
     * Get profesionalid
     *
     * @return \AppBundle\Entity\Profesional
     */
    public function getProfesionalid()
    {
        return $this->profesionalid;
    }

    /**
     * Set categoriaAnuncioid
     *
     * @param \AppBundle\Entity\CategoriaAnuncio $categoriaAnuncioid
     *
     * @return Anuncio
     */
    public function setCategoriaAnuncioid(\AppBundle\Entity\CategoriaAnuncio $categoriaAnuncioid = null)
    {
        $this->categoriaAnuncioid = $categoriaAnuncioid;

        return $this;
    }

    /**
     * Get categoriaAnuncioid
     *
     * @return \AppBundle\Entity\CategoriaAnuncio
     */
    public function getCategoriaAnuncioid()
    {
        return $this->categoriaAnuncioid;
    }
}

