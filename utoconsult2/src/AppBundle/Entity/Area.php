<?php

namespace AppBundle\Entity;

/**
 * Area
 */
class Area
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $areaid;

    /**
     * @var string
     */
    private $area;

    /**
     * @var integer
     */
    private $fatherid;


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
     * Set areaid
     *
     * @param integer $areaid
     *
     * @return Area
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return integer
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Area
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set fatherid
     *
     * @param integer $fatherid
     *
     * @return Area
     */
    public function setFatherid($fatherid)
    {
        $this->fatherid = $fatherid;

        return $this;
    }

    /**
     * Get fatherid
     *
     * @return integer
     */
    public function getFatherid()
    {
        return $this->fatherid;
    }
}

