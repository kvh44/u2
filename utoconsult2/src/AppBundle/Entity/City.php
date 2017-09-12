<?php

namespace AppBundle\Entity;

/**
 * City
 */
class City
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cityid;

    /**
     * @var string
     */
    private $city;

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
     * Set cityid
     *
     * @param integer $cityid
     *
     * @return City
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;

        return $this;
    }

    /**
     * Get cityid
     *
     * @return integer
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return City
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set fatherid
     *
     * @param integer $fatherid
     *
     * @return City
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

