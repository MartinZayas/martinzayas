<?php

namespace AppBundle\Entity;

/**
 * AdversimentsCategories
 */
class AdversimentsCategories
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
     * @var \AppBundle\Entity\AdversimentsCategories
     */
    private $parent;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return AdversimentsCategories
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
     * @return AdversimentsCategories
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
     * @param \AppBundle\Entity\AdversimentsCategories $parent
     *
     * @return AdversimentsCategories
     */
    public function setParent(\AppBundle\Entity\AdversimentsCategories $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\AdversimentsCategories
     */
    public function getParent()
    {
        return $this->parent;
    }
}

