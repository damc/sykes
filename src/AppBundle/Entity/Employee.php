<?php

namespace AppBundle\Entity;

/**
 * Employee
 */
class Employee
{
    /**
     * @var integer
     */
    private $pk;

    /**
     * @var integer
     */
    private $fkDepartment;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var integer
     */
    private $age;


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
     * Set fkDepartment
     *
     * @param integer $fkDepartment
     *
     * @return Employee
     */
    public function setFkDepartment($fkDepartment)
    {
        $this->fkDepartment = $fkDepartment;

        return $this;
    }

    /**
     * Get fkDepartment
     *
     * @return integer
     */
    public function getFkDepartment()
    {
        return $this->fkDepartment;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Employee
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Employee
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }
}
