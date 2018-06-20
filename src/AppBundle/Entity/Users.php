<?php

namespace AppBundle\Entity;

/**
 * Users
 */
class Users
{
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
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\UsersStatus
     */
    private $status;

    /**
     * @var \AppBundle\Entity\UsersSocialNetworks
     */
    private $social;

    /**
     * @var \AppBundle\Entity\UsersRoles
     */
    private $role;

    /**
     * @var \AppBundle\Entity\UsersBillingData
     */
    private $billing;

    /**
     * @var \AppBundle\Entity\UsersAddresses
     */
    private $address;


    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Users
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * Set status
     *
     * @param \AppBundle\Entity\UsersStatus $status
     *
     * @return Users
     */
    public function setStatus(\AppBundle\Entity\UsersStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\UsersStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set social
     *
     * @param \AppBundle\Entity\UsersSocialNetworks $social
     *
     * @return Users
     */
    public function setSocial(\AppBundle\Entity\UsersSocialNetworks $social = null)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return \AppBundle\Entity\UsersSocialNetworks
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Set role
     *
     * @param \AppBundle\Entity\UsersRoles $role
     *
     * @return Users
     */
    public function setRole(\AppBundle\Entity\UsersRoles $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \AppBundle\Entity\UsersRoles
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set billing
     *
     * @param \AppBundle\Entity\UsersBillingData $billing
     *
     * @return Users
     */
    public function setBilling(\AppBundle\Entity\UsersBillingData $billing = null)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * Get billing
     *
     * @return \AppBundle\Entity\UsersBillingData
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\UsersAddresses $address
     *
     * @return Users
     */
    public function setAddress(\AppBundle\Entity\UsersAddresses $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\UsersAddresses
     */
    public function getAddress()
    {
        return $this->address;
    }
}

