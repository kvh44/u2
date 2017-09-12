<?php

namespace AppBundle\Entity;

/**
 * Province
 */
class Province
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $provinceid;

    /**
     * @var string
     */
    private $province;


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
     * Set provinceid
     *
     * @param integer $provinceid
     *
     * @return Province
     */
    public function setProvinceid($provinceid)
    {
        $this->provinceid = $provinceid;

        return $this;
    }

    /**
     * Get provinceid
     *
     * @return integer
     */
    public function getProvinceid()
    {
        return $this->provinceid;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Province
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }
}

