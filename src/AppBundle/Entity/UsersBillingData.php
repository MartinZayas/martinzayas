<?php

namespace AppBundle\Entity;

/**
 * UsersBillingData
 */
class UsersBillingData
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $identificationDoc;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\UsersAddresses
     */
    private $address;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return UsersBillingData
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
     * Set identificationDoc
     *
     * @param string $identificationDoc
     *
     * @return UsersBillingData
     */
    public function setIdentificationDoc($identificationDoc)
    {
        $this->identificationDoc = $identificationDoc;

        return $this;
    }

    /**
     * Get identificationDoc
     *
     * @return string
     */
    public function getIdentificationDoc()
    {
        return $this->identificationDoc;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return UsersBillingData
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\UsersAddresses $address
     *
     * @return UsersBillingData
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

