<?php

namespace AppBundle\Entity;

/**
 * UtoconsultArticleCategory2
 */
class UtoconsultArticleCategory2
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $category1Id;

    /**
     * @var integer
     */
    private $orders;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set category1Id
     *
     * @param integer $category1Id
     *
     * @return UtoconsultArticleCategory2
     */
    public function setCategory1Id($category1Id)
    {
        $this->category1Id = $category1Id;

        return $this;
    }

    /**
     * Get category1Id
     *
     * @return integer
     */
    public function getCategory1Id()
    {
        return $this->category1Id;
    }

    /**
     * Set orders
     *
     * @param integer $orders
     *
     * @return UtoconsultArticleCategory2
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return integer
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UtoconsultArticleCategory2
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return UtoconsultArticleCategory2
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UtoconsultArticleCategory2
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return UtoconsultArticleCategory2
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

