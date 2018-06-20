<?php

namespace AppBundle\Entity;

/**
 * UsersFollowers
 */
class UsersFollowers
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
    private $follower;


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
     * @return UsersFollowers
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
     * Set follower
     *
     * @param \AppBundle\Entity\Users $follower
     *
     * @return UsersFollowers
     */
    public function setFollower(\AppBundle\Entity\Users $follower = null)
    {
        $this->follower = $follower;

        return $this;
    }

    /**
     * Get follower
     *
     * @return \AppBundle\Entity\Users
     */
    public function getFollower()
    {
        return $this->follower;
    }
}

