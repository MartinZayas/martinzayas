<?php

namespace AppBundle\Entity;

/**
 * Artists
 */
class Artists
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
    private $cacheMin;

    /**
     * @var \DateTime
     */
    private $experience;

    /**
     * @var string
     */
    private $bio;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $user;

    /**
     * @var \AppBundle\Entity\ArtistsTypes
     */
    private $type;

    /**
     * @var \AppBundle\Entity\ArtistsStatus
     */
    private $status;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Artists
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
     * @return Artists
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
     * Set cacheMin
     *
     * @param string $cacheMin
     *
     * @return Artists
     */
    public function setCacheMin($cacheMin)
    {
        $this->cacheMin = $cacheMin;

        return $this;
    }

    /**
     * Get cacheMin
     *
     * @return string
     */
    public function getCacheMin()
    {
        return $this->cacheMin;
    }

    /**
     * Set experience
     *
     * @param \DateTime $experience
     *
     * @return Artists
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
     * Set bio
     *
     * @param string $bio
     *
     * @return Artists
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
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
     * @return Artists
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
     * @param \AppBundle\Entity\ArtistsTypes $type
     *
     * @return Artists
     */
    public function setType(\AppBundle\Entity\ArtistsTypes $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\ArtistsTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\ArtistsStatus $status
     *
     * @return Artists
     */
    public function setStatus(\AppBundle\Entity\ArtistsStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\ArtistsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
}

