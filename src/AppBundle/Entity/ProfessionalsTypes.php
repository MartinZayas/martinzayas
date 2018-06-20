<?php

namespace AppBundle\Entity;

/**
 * ProfessionalsTypes
 */
class ProfessionalsTypes
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\ProfessionalsTypes
     */
    private $parent;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProfessionalsTypes
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
     * Set slug
     *
     * @param string $slug
     *
     * @return ProfessionalsTypes
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
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
     * Set parent
     *
     * @param \AppBundle\Entity\ProfessionalsTypes $parent
     *
     * @return ProfessionalsTypes
     */
    public function setParent(\AppBundle\Entity\ProfessionalsTypes $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\ProfessionalsTypes
     */
    public function getParent()
    {
        return $this->parent;
    }
}

