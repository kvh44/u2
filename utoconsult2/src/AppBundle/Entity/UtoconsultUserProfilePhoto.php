<?php

namespace AppBundle\Entity;

/**
 * UtoconsultUserProfilePhoto
 */
class UtoconsultUserProfilePhoto
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
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $photoicon;

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
     * Set userId
     *
     * @param integer $userId
     *
     * @return UtoconsultUserProfilePhoto
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
     * Set photo
     *
     * @param string $photo
     *
     * @return UtoconsultUserProfilePhoto
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
     * Set photoicon
     *
     * @param string $photoicon
     *
     * @return UtoconsultUserProfilePhoto
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UtoconsultUserProfilePhoto
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
     * @return UtoconsultUserProfilePhoto
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

