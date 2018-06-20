<?php

namespace AppBundle\Entity;

/**
 * UsersAddresses
 */
class UsersAddresses
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Provinces
     */
    private $province;

    /**
     * @var \AppBundle\Entity\Countries
     */
    private $country;

    /**
     * @var \AppBundle\Entity\Cities
     */
    private $city;


    /**
     * Set address
     *
     * @param string $address
     *
     * @return UsersAddresses
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return UsersAddresses
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
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
     * Set province
     *
     * @param \AppBundle\Entity\Provinces $province
     *
     * @return UsersAddresses
     */
    public function setProvince(\AppBundle\Entity\Provinces $province = null)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return \AppBundle\Entity\Provinces
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Countries $country
     *
     * @return UsersAddresses
     */
    public function setCountry(\AppBundle\Entity\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Countries
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param \AppBundle\Entity\Cities $city
     *
     * @return UsersAddresses
     */
    public function setCity(\AppBundle\Entity\Cities $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \AppBundle\Entity\Cities
     */
    public function getCity()
    {
        return $this->city;
    }
}

