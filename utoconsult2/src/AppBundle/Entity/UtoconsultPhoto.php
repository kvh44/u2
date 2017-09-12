<?php

namespace AppBundle\Entity;

/**
 * UtoconsultPhoto
 */
class UtoconsultPhoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $photoicon;

    /**
     * @var string
     */
    private $photosmall;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $link;

    /**
     * @var integer
     */
    private $visitnumber;

    /**
     * @var boolean
     */
    private $isdeleted = '0';

    /**
     * @var boolean
     */
    private $isvalid = '1';

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $slug;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return UtoconsultPhoto
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return UtoconsultPhoto
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return UtoconsultPhoto
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
     * Set content
     *
     * @param string $content
     *
     * @return UtoconsultPhoto
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set photoicon
     *
     * @param string $photoicon
     *
     * @return UtoconsultPhoto
     */
    public function setPhotoicon($photoicon)
    {
        $this->photoicon = $photoicon;

        return $this;
    }

    /**
     * Get photoicon
     *
     * @return string
     */
    public function getPhotoicon()
    {
        return $this->photoicon;
    }

    /**
     * Set photosmall
     *
     * @param string $photosmall
     *
     * @return UtoconsultPhoto
     */
    public function setPhotosmall($photosmall)
    {
        $this->photosmall = $photosmall;

        return $this;
    }

    /**
     * Get photosmall
     *
     * @return string
     */
    public function getPhotosmall()
    {
        return $this->photosmall;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return UtoconsultPhoto
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return UtoconsultPhoto
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set visitnumber
     *
     * @param integer $visitnumber
     *
     * @return UtoconsultPhoto
     */
    public function setVisitnumber($visitnumber)
    {
        $this->visitnumber = $visitnumber;

        return $this;
    }

    /**
     * Get visitnumber
     *
     * @return integer
     */
    public function getVisitnumber()
    {
        return $this->visitnumber;
    }

    /**
     * Set isdeleted
     *
     * @param boolean $isdeleted
     *
     * @return UtoconsultPhoto
     */
    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * Get isdeleted
     *
     * @return boolean
     */
    public function getIsdeleted()
    {
        return $this->isdeleted;
    }

    /**
     * Set isvalid
     *
     * @param boolean $isvalid
     *
     * @return UtoconsultPhoto
     */
    public function setIsvalid($isvalid)
    {
        $this->isvalid = $isvalid;

        return $this;
    }

    /**
     * Get isvalid
     *
     * @return boolean
     */
    public function getIsvalid()
    {
        return $this->isvalid;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UtoconsultPhoto
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
     * @return UtoconsultPhoto
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

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return UtoconsultPhoto
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
}

