<?php

namespace AppBundle\Entity;

/**
 * UtoconsultUserContact
 */
class UtoconsultUserContact
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
    private $mobile;

    /**
     * @var string
     */
    private $fix;

    /**
     * @var string
     */
    private $fix2;

    /**
     * @var string
     */
    private $qq;

    /**
     * @var string
     */
    private $msn;

    /**
     * @var string
     */
    private $skype;

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
     * @return UtoconsultUserContact
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
     * Set mobile
     *
     * @param string $mobile
     *
     * @return UtoconsultUserContact
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fix
     *
     * @param string $fix
     *
     * @return UtoconsultUserContact
     */
    public function setFix($fix)
    {
        $this->fix = $fix;

        return $this;
    }

    /**
     * Get fix
     *
     * @return string
     */
    public function getFix()
    {
        return $this->fix;
    }

    /**
     * Set fix2
     *
     * @param string $fix2
     *
     * @return UtoconsultUserContact
     */
    public function setFix2($fix2)
    {
        $this->fix2 = $fix2;

        return $this;
    }

    /**
     * Get fix2
     *
     * @return string
     */
    public function getFix2()
    {
        return $this->fix2;
    }

    /**
     * Set qq
     *
     * @param string $qq
     *
     * @return UtoconsultUserContact
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set msn
     *
     * @param string $msn
     *
     * @return UtoconsultUserContact
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return UtoconsultUserContact
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UtoconsultUserContact
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
     * @return UtoconsultUserContact
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

