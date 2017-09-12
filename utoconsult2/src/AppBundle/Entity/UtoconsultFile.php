<?php

namespace AppBundle\Entity;

/**
 * UtoconsultFile
 */
class UtoconsultFile
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
    private $keywords;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $fileOriginal;

    /**
     * @var integer
     */
    private $visitnumber;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $imageicon;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var boolean
     */
    private $isuto = '0';

    /**
     * @var string
     */
    private $type;

    /**
     * @var boolean
     */
    private $isvalid = '1';

    /**
     * @var boolean
     */
    private $isdeleted = '0';

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
     * @return UtoconsultFile
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
     * @return UtoconsultFile
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
     * @return UtoconsultFile
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return UtoconsultFile
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
     * Set description
     *
     * @param string $description
     *
     * @return UtoconsultFile
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
     * Set file
     *
     * @param string $file
     *
     * @return UtoconsultFile
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set fileOriginal
     *
     * @param string $fileOriginal
     *
     * @return UtoconsultFile
     */
    public function setFileOriginal($fileOriginal)
    {
        $this->fileOriginal = $fileOriginal;

        return $this;
    }

    /**
     * Get fileOriginal
     *
     * @return string
     */
    public function getFileOriginal()
    {
        return $this->fileOriginal;
    }

    /**
     * Set visitnumber
     *
     * @param integer $visitnumber
     *
     * @return UtoconsultFile
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
     * Set image
     *
     * @param string $image
     *
     * @return UtoconsultFile
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set imageicon
     *
     * @param string $imageicon
     *
     * @return UtoconsultFile
     */
    public function setImageicon($imageicon)
    {
        $this->imageicon = $imageicon;

        return $this;
    }

    /**
     * Get imageicon
     *
     * @return string
     */
    public function getImageicon()
    {
        return $this->imageicon;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return UtoconsultFile
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return UtoconsultFile
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set isuto
     *
     * @param boolean $isuto
     *
     * @return UtoconsultFile
     */
    public function setIsuto($isuto)
    {
        $this->isuto = $isuto;

        return $this;
    }

    /**
     * Get isuto
     *
     * @return boolean
     */
    public function getIsuto()
    {
        return $this->isuto;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return UtoconsultFile
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isvalid
     *
     * @param boolean $isvalid
     *
     * @return UtoconsultFile
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
     * Set isdeleted
     *
     * @param boolean $isdeleted
     *
     * @return UtoconsultFile
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UtoconsultFile
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
     * @return UtoconsultFile
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
     * @return UtoconsultFile
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

