<?php

namespace AppBundle\Entity;

/**
 * Local
 */
class Local
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
    private $telefono;

    /**
     * @var integer
     */
    private $aforo;

    /**
     * @var integer
     */
    private $medidasEscenario;

    /**
     * @var integer
     */
    private $cacheMin;

    /**
     * @var integer
     */
    private $cacheMax;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $idciudad;

    /**
     * @var string
     */
    private $cif;

    /**
     * @var integer
     */
    private $anioApertura;

    /**
     * @var integer
     */
    private $mesApertura;

    /**
     * @var string
     */
    private $video;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var \AppBundle\Entity\DatosFacturacion
     */
    private $datosFacturacionid;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $usuarioid;

    /**
     * @var \AppBundle\Entity\Contacto
     */
    private $contactoid;

    /**
     * @var \AppBundle\Entity\EstadoLocal
     */
    private $estadoLocalid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $caracteristicaLocalid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estiloid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->caracteristicaLocalid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Local
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Local
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set aforo
     *
     * @param integer $aforo
     *
     * @return Local
     */
    public function setAforo($aforo)
    {
        $this->aforo = $aforo;

        return $this;
    }

    /**
     * Get aforo
     *
     * @return integer
     */
    public function getAforo()
    {
        return $this->aforo;
    }

    /**
     * Set medidasEscenario
     *
     * @param integer $medidasEscenario
     *
     * @return Local
     */
    public function setMedidasEscenario($medidasEscenario)
    {
        $this->medidasEscenario = $medidasEscenario;

        return $this;
    }

    /**
     * Get medidasEscenario
     *
     * @return integer
     */
    public function getMedidasEscenario()
    {
        return $this->medidasEscenario;
    }

    /**
     * Set cacheMin
     *
     * @param integer $cacheMin
     *
     * @return Local
     */
    public function setCacheMin($cacheMin)
    {
        $this->cacheMin = $cacheMin;

        return $this;
    }

    /**
     * Get cacheMin
     *
     * @return integer
     */
    public function getCacheMin()
    {
        return $this->cacheMin;
    }

    /**
     * Set cacheMax
     *
     * @param integer $cacheMax
     *
     * @return Local
     */
    public function setCacheMax($cacheMax)
    {
        $this->cacheMax = $cacheMax;

        return $this;
    }

    /**
     * Get cacheMax
     *
     * @return integer
     */
    public function getCacheMax()
    {
        return $this->cacheMax;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Local
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Local
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set idciudad
     *
     * @param integer $idciudad
     *
     * @return Local
     */
    public function setIdciudad($idciudad)
    {
        $this->idciudad = $idciudad;

        return $this;
    }

    /**
     * Get idciudad
     *
     * @return integer
     */
    public function getIdciudad()
    {
        return $this->idciudad;
    }

    /**
     * Set cif
     *
     * @param string $cif
     *
     * @return Local
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set anioApertura
     *
     * @param integer $anioApertura
     *
     * @return Local
     */
    public function setAnioApertura($anioApertura)
    {
        $this->anioApertura = $anioApertura;

        return $this;
    }

    /**
     * Get anioApertura
     *
     * @return integer
     */
    public function getAnioApertura()
    {
        return $this->anioApertura;
    }

    /**
     * Set mesApertura
     *
     * @param integer $mesApertura
     *
     * @return Local
     */
    public function setMesApertura($mesApertura)
    {
        $this->mesApertura = $mesApertura;

        return $this;
    }

    /**
     * Get mesApertura
     *
     * @return integer
     */
    public function getMesApertura()
    {
        return $this->mesApertura;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Local
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Local
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set datosFacturacionid
     *
     * @param \AppBundle\Entity\DatosFacturacion $datosFacturacionid
     *
     * @return Local
     */
    public function setDatosFacturacionid(\AppBundle\Entity\DatosFacturacion $datosFacturacionid = null)
    {
        $this->datosFacturacionid = $datosFacturacionid;

        return $this;
    }

    /**
     * Get datosFacturacionid
     *
     * @return \AppBundle\Entity\DatosFacturacion
     */
    public function getDatosFacturacionid()
    {
        return $this->datosFacturacionid;
    }

    /**
     * Set usuarioid
     *
     * @param \AppBundle\Entity\Usuarios $usuarioid
     *
     * @return Local
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
     * Set contactoid
     *
     * @param \AppBundle\Entity\Contacto $contactoid
     *
     * @return Local
     */
    public function setContactoid(\AppBundle\Entity\Contacto $contactoid = null)
    {
        $this->contactoid = $contactoid;

        return $this;
    }

    /**
     * Get contactoid
     *
     * @return \AppBundle\Entity\Contacto
     */
    public function getContactoid()
    {
        return $this->contactoid;
    }

    /**
     * Set estadoLocalid
     *
     * @param \AppBundle\Entity\EstadoLocal $estadoLocalid
     *
     * @return Local
     */
    public function setEstadoLocalid(\AppBundle\Entity\EstadoLocal $estadoLocalid = null)
    {
        $this->estadoLocalid = $estadoLocalid;

        return $this;
    }

    /**
     * Get estadoLocalid
     *
     * @return \AppBundle\Entity\EstadoLocal
     */
    public function getEstadoLocalid()
    {
        return $this->estadoLocalid;
    }

    /**
     * Add caracteristicaLocalid
     *
     * @param \AppBundle\Entity\CaracteristicaLocal $caracteristicaLocalid
     *
     * @return Local
     */
    public function addCaracteristicaLocalid(\AppBundle\Entity\CaracteristicaLocal $caracteristicaLocalid)
    {
        $this->caracteristicaLocalid[] = $caracteristicaLocalid;

        return $this;
    }

    /**
     * Remove caracteristicaLocalid
     *
     * @param \AppBundle\Entity\CaracteristicaLocal $caracteristicaLocalid
     */
    public function removeCaracteristicaLocalid(\AppBundle\Entity\CaracteristicaLocal $caracteristicaLocalid)
    {
        $this->caracteristicaLocalid->removeElement($caracteristicaLocalid);
    }

    /**
     * Get caracteristicaLocalid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCaracteristicaLocalid()
    {
        return $this->caracteristicaLocalid;
    }

    /**
     * Add estiloid
     *
     * @param \AppBundle\Entity\Estilo $estiloid
     *
     * @return Local
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

