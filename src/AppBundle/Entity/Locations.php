<?php

namespace AppBundle\Entity;

/**
 * Locations
 */
class Locations
{
    /**
     * @var integer
     */
    private $pk;

    /**
     * @var string
     */
    private $locationName;


    /**
     * Get pk
     *
     * @return integer
     */
    public function getPk()
    {
        return $this->pk;
    }

    /**
     * Set locationName
     *
     * @param string $locationName
     *
     * @return Locations
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Get locationName
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }
}
