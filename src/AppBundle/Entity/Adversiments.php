<?php

namespace AppBundle\Entity;

/**
 * Adversiments
 */
class Adversiments
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $expirationDate;

    /**
     * @var boolean
     */
    private $featuredAd;

    /**
     * @var \DateTime
     */
    private $featuredAdEnd;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\AdversimentsStatus
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Professionals
     */
    private $professional;

    /**
     * @var \AppBundle\Entity\AdversimentsCategories
     */
    private $category;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Adversiments
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Adversiments
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Adversiments
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return Adversiments
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set featuredAd
     *
     * @param boolean $featuredAd
     *
     * @return Adversiments
     */
    public function setFeaturedAd($featuredAd)
    {
        $this->featuredAd = $featuredAd;

        return $this;
    }

    /**
     * Get featuredAd
     *
     * @return boolean
     */
    public function getFeaturedAd()
    {
        return $this->featuredAd;
    }

    /**
     * Set featuredAdEnd
     *
     * @param \DateTime $featuredAdEnd
     *
     * @return Adversiments
     */
    public function setFeaturedAdEnd($featuredAdEnd)
    {
        $this->featuredAdEnd = $featuredAdEnd;

        return $this;
    }

    /**
     * Get featuredAdEnd
     *
     * @return \DateTime
     */
    public function getFeaturedAdEnd()
    {
        return $this->featuredAdEnd;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Adversiments
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
     * @param \AppBundle\Entity\AdversimentsStatus $status
     *
     * @return Adversiments
     */
    public function setStatus(\AppBundle\Entity\AdversimentsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\AdversimentsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set professional
     *
     * @param \AppBundle\Entity\Professionals $professional
     *
     * @return Adversiments
     */
    public function setProfessional(\AppBundle\Entity\Professionals $professional = null)
    {
        $this->professional = $professional;

        return $this;
    }

    /**
     * Get professional
     *
     * @return \AppBundle\Entity\Professionals
     */
    public function getProfessional()
    {
        return $this->professional;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\AdversimentsCategories $category
     *
     * @return Adversiments
     */
    public function setCategory(\AppBundle\Entity\AdversimentsCategories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\AdversimentsCategories
     */
    public function getCategory()
    {
        return $this->category;
    }
}

