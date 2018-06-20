<?php

namespace AppBundle\Entity;

/**
 * Professionals
 */
class Professionals
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nick;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $experience;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $user;

    /**
     * @var \AppBundle\Entity\ProfessionalsTypes
     */
    private $type;

    /**
     * @var \AppBundle\Entity\ProfessionalsStatus
     */
    private $status;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Professionals
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
     * Set nick
     *
     * @param string $nick
     *
     * @return Professionals
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Professionals
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
     * Set experience
     *
     * @param \DateTime $experience
     *
     * @return Professionals
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return \DateTime
     */
    public function getExperience()
    {
        return $this->experience;
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
     * Set user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Professionals
     */
    public function setUser(\AppBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\ProfessionalsTypes $type
     *
     * @return Professionals
     */
    public function setType(\AppBundle\Entity\ProfessionalsTypes $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\ProfessionalsTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\ProfessionalsStatus $status
     *
     * @return Professionals
     */
    public function setStatus(\AppBundle\Entity\ProfessionalsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\ProfessionalsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
}

