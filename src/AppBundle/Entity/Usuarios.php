<?php

namespace AppBundle\Entity;

/**
 * Usuarios
 */
class Usuarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $rol;

    /**
     * @var string
     */
    private $nif;

    /**
     * @var \DateTime
     */
    private $fechaRegistro;

    /**
     * @var \AppBundle\Entity\Direccion
     */
    private $direccionid;

    /**
     * @var \AppBundle\Entity\EstadoUsuario
     */
    private $estadoUsuarioid;


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
     * Set email
     *
     * @param string $email
     *
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Usuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuarios
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Usuarios
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return Usuarios
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Usuarios
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return Usuarios
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set direccionid
     *
     * @param \AppBundle\Entity\Direccion $direccionid
     *
     * @return Usuarios
     */
    public function setDireccionid(\AppBundle\Entity\Direccion $direccionid = null)
    {
        $this->direccionid = $direccionid;

        return $this;
    }

    /**
     * Get direccionid
     *
     * @return \AppBundle\Entity\Direccion
     */
    public function getDireccionid()
    {
        return $this->direccionid;
    }

    /**
     * Set estadoUsuarioid
     *
     * @param \AppBundle\Entity\EstadoUsuario $estadoUsuarioid
     *
     * @return Usuarios
     */
    public function setEstadoUsuarioid(\AppBundle\Entity\EstadoUsuario $estadoUsuarioid = null)
    {
        $this->estadoUsuarioid = $estadoUsuarioid;

        return $this;
    }

    /**
     * Get estadoUsuarioid
     *
     * @return \AppBundle\Entity\EstadoUsuario
     */
    public function getEstadoUsuarioid()
    {
        return $this->estadoUsuarioid;
    }
}

