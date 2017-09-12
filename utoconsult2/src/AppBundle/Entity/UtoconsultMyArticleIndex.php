<?php

namespace AppBundle\Entity;

/**
 * UtoconsultMyArticleIndex
 */
class UtoconsultMyArticleIndex
{
    /**
     * @var string
     */
    private $keyword = '';

    /**
     * @var string
     */
    private $field = '';

    /**
     * @var integer
     */
    private $position = '0';

    /**
     * @var integer
     */
    private $id = '0';


    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return UtoconsultMyArticleIndex
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return UtoconsultMyArticleIndex
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return UtoconsultMyArticleIndex
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return UtoconsultMyArticleIndex
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}

