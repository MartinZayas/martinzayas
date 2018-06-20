<?php

namespace AppBundle\Entity;

/**
 * UsersFavorites
 */
class UsersFavorites
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
     * @var \AppBundle\Entity\Users
     */
    private $favorite;


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
     * @return UsersFavorites
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
     * Set favorite
     *
     * @param \AppBundle\Entity\Users $favorite
     *
     * @return UsersFavorites
     */
    public function setFavorite(\AppBundle\Entity\Users $favorite = null)
    {
        $this->favorite = $favorite;

        return $this;
    }

    /**
     * Get favorite
     *
     * @return \AppBundle\Entity\Users
     */
    public function getFavorite()
    {
        return $this->favorite;
    }
}

