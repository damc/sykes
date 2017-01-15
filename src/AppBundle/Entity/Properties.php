<?php

namespace AppBundle\Entity;

/**
 * Properties
 */
class Properties
{
    /**
     * @var integer
     */
    private $pk;

    /**
     * @var string
     */
    private $propertyName;

    /**
     * @var boolean
     */
    private $nearBeach;

    /**
     * @var boolean
     */
    private $acceptPets;

    /**
     * @var boolean
     */
    private $sleeps;

    /**
     * @var boolean
     */
    private $beds;

    /**
     * @var \AppBundle\Entity\Locations
     */
    private $fkLocation;


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
     * Set propertyName
     *
     * @param string $propertyName
     *
     * @return Properties
     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;

        return $this;
    }

    /**
     * Get propertyName
     *
     * @return string
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * Set nearBeach
     *
     * @param boolean $nearBeach
     *
     * @return Properties
     */
    public function setNearBeach($nearBeach)
    {
        $this->nearBeach = $nearBeach;

        return $this;
    }

    /**
     * Get nearBeach
     *
     * @return boolean
     */
    public function getNearBeach()
    {
        return $this->nearBeach;
    }

    /**
     * Set acceptPets
     *
     * @param boolean $acceptPets
     *
     * @return Properties
     */
    public function setAcceptPets($acceptPets)
    {
        $this->acceptPets = $acceptPets;

        return $this;
    }

    /**
     * Get acceptPets
     *
     * @return boolean
     */
    public function getAcceptPets()
    {
        return $this->acceptPets;
    }

    /**
     * Set sleeps
     *
     * @param boolean $sleeps
     *
     * @return Properties
     */
    public function setSleeps($sleeps)
    {
        $this->sleeps = $sleeps;

        return $this;
    }

    /**
     * Get sleeps
     *
     * @return boolean
     */
    public function getSleeps()
    {
        return $this->sleeps;
    }

    /**
     * Set beds
     *
     * @param boolean $beds
     *
     * @return Properties
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;

        return $this;
    }

    /**
     * Get beds
     *
     * @return boolean
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Set fkLocation
     *
     * @param \AppBundle\Entity\Locations $fkLocation
     *
     * @return Properties
     */
    public function setFkLocation(\AppBundle\Entity\Locations $fkLocation = null)
    {
        $this->fkLocation = $fkLocation;

        return $this;
    }

    /**
     * Get fkLocation
     *
     * @return \AppBundle\Entity\Locations
     */
    public function getFkLocation()
    {
        return $this->fkLocation;
    }
}
