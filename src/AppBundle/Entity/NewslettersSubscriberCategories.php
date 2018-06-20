<?php

namespace AppBundle\Entity;

/**
 * NewslettersSubscriberCategories
 */
class NewslettersSubscriberCategories
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\NewslettersSubscriber
     */
    private $subscriber;

    /**
     * @var \AppBundle\Entity\NewslettersCategories
     */
    private $category;


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
     * Set subscriber
     *
     * @param \AppBundle\Entity\NewslettersSubscriber $subscriber
     *
     * @return NewslettersSubscriberCategories
     */
    public function setSubscriber(\AppBundle\Entity\NewslettersSubscriber $subscriber = null)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get subscriber
     *
     * @return \AppBundle\Entity\NewslettersSubscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\NewslettersCategories $category
     *
     * @return NewslettersSubscriberCategories
     */
    public function setCategory(\AppBundle\Entity\NewslettersCategories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\NewslettersCategories
     */
    public function getCategory()
    {
        return $this->category;
    }
}

