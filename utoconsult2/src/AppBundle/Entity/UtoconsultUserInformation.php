<?php

namespace AppBundle\Entity;

/**
 * UtoconsultUserInformation
 */
class UtoconsultUserInformation
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
    private $realname;

    /**
     * @var string
     */
    private $web;

    /**
     * @var string
     */
    private $special;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $country;

    /**
     * @var integer
     */
    private $province;

    /**
     * @var integer
     */
    private $city;

    /**
     * @var integer
     */
    private $area;

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
     * @return UtoconsultUserInformation
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
     * Set realname
     *
     * @param string $realname
     *
     * @return UtoconsultUserInformation
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }

    /**
     * Get realname
     *
     * @return string
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Set web
     *
     * @param string $web
     *
     * @return UtoconsultUserInformation
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set special
     *
     * @param string $special
     *
     * @return UtoconsultUserInformation
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return string
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return UtoconsultUserInformation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set country
     *
     * @param integer $country
     *
     * @return UtoconsultUserInformation
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set province
     *
     * @param integer $province
     *
     * @return UtoconsultUserInformation
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return integer
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set city
     *
     * @param integer $city
     *
     * @return UtoconsultUserInformation
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set area
     *
     * @param integer $area
     *
     * @return UtoconsultUserInformation
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UtoconsultUserInformation
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
     * @return UtoconsultUserInformation
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

