<?php

namespace AppBundle\Entity;

/**
 * UtoconsultMyArticle
 */
class UtoconsultMyArticle
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
    private $category2Id;

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
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $pdf;

    /**
     * @var string
     */
    private $keywordsEn;

    /**
     * @var string
     */
    private $descriptionEn;

    /**
     * @var string
     */
    private $titleEn;

    /**
     * @var string
     */
    private $contentEn;

    /**
     * @var string
     */
    private $pdfEn;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $visitnumber;

    /**
     * @var boolean
     */
    private $comment = '1';

    /**
     * @var string
     */
    private $level;

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
     * Set category1Id
     *
     * @param integer $category1Id
     *
     * @return UtoconsultMyArticle
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
     * Set category2Id
     *
     * @param integer $category2Id
     *
     * @return UtoconsultMyArticle
     */
    public function setCategory2Id($category2Id)
    {
        $this->category2Id = $category2Id;

        return $this;
    }

    /**
     * Get category2Id
     *
     * @return integer
     */
    public function getCategory2Id()
    {
        return $this->category2Id;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return UtoconsultMyArticle
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
     * @return UtoconsultMyArticle
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
     * Set title
     *
     * @param string $title
     *
     * @return UtoconsultMyArticle
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
     * @return UtoconsultMyArticle
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
     * Set pdf
     *
     * @param string $pdf
     *
     * @return UtoconsultMyArticle
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set keywordsEn
     *
     * @param string $keywordsEn
     *
     * @return UtoconsultMyArticle
     */
    public function setKeywordsEn($keywordsEn)
    {
        $this->keywordsEn = $keywordsEn;

        return $this;
    }

    /**
     * Get keywordsEn
     *
     * @return string
     */
    public function getKeywordsEn()
    {
        return $this->keywordsEn;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     *
     * @return UtoconsultMyArticle
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return UtoconsultMyArticle
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set contentEn
     *
     * @param string $contentEn
     *
     * @return UtoconsultMyArticle
     */
    public function setContentEn($contentEn)
    {
        $this->contentEn = $contentEn;

        return $this;
    }

    /**
     * Get contentEn
     *
     * @return string
     */
    public function getContentEn()
    {
        return $this->contentEn;
    }

    /**
     * Set pdfEn
     *
     * @param string $pdfEn
     *
     * @return UtoconsultMyArticle
     */
    public function setPdfEn($pdfEn)
    {
        $this->pdfEn = $pdfEn;

        return $this;
    }

    /**
     * Get pdfEn
     *
     * @return string
     */
    public function getPdfEn()
    {
        return $this->pdfEn;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UtoconsultMyArticle
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
     * Set visitnumber
     *
     * @param integer $visitnumber
     *
     * @return UtoconsultMyArticle
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
     * Set comment
     *
     * @param boolean $comment
     *
     * @return UtoconsultMyArticle
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return boolean
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return UtoconsultMyArticle
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set isdeleted
     *
     * @param boolean $isdeleted
     *
     * @return UtoconsultMyArticle
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
     * @return UtoconsultMyArticle
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
     * @return UtoconsultMyArticle
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
     * @return UtoconsultMyArticle
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
     * @return UtoconsultMyArticle
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

