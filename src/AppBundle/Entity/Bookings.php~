<?php

namespace AppBundle\Entity;

/**
 * Bookings
 */
class Bookings
{
    /**
     * @var integer
     */
    private $pk;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \AppBundle\Entity\Properties
     */
    private $fkProperty;


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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Bookings
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Bookings
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set fkProperty
     *
     * @param \AppBundle\Entity\Properties $fkProperty
     *
     * @return Bookings
     */
    public function setFkProperty(\AppBundle\Entity\Properties $fkProperty = null)
    {
        $this->fkProperty = $fkProperty;

        return $this;
    }

    /**
     * Get fkProperty
     *
     * @return \AppBundle\Entity\Properties
     */
    public function getFkProperty()
    {
        return $this->fkProperty;
    }
}
