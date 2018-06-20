<?php

namespace AppBundle\Entity;

/**
 * PublicationsLikes
 */
class PublicationsLikes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Publications
     */
    private $publication;


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
     * @return PublicationsLikes
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
     * Set publication
     *
     * @param \AppBundle\Entity\Publications $publication
     *
     * @return PublicationsLikes
     */
    public function setPublication(\AppBundle\Entity\Publications $publication = null)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \AppBundle\Entity\Publications
     */
    public function getPublication()
    {
        return $this->publication;
    }
}

