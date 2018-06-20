<?php

namespace AppBundle\Entity;

/**
 * Album
 */
class Album
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
     * @var string
     */
    private $imagen;

    /**
     * @var integer
     */
    private $anno;

    /**
     * @var \AppBundle\Entity\Artista
     */
    private $artistaid;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Album
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
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Album
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     *
     * @return Album
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set artistaid
     *
     * @param \AppBundle\Entity\Artista $artistaid
     *
     * @return Album
     */
    public function setArtistaid(\AppBundle\Entity\Artista $artistaid = null)
    {
        $this->artistaid = $artistaid;

        return $this;
    }

    /**
     * Get artistaid
     *
     * @return \AppBundle\Entity\Artista
     */
    public function getArtistaid()
    {
        return $this->artistaid;
    }

    /**
     * Add estiloid
     *
     * @param \AppBundle\Entity\Estilo $estiloid
     *
     * @return Album
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

