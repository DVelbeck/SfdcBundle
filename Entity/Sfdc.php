<?php

namespace SfdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass(repositoryClass="SfdcBundle\Entity\Repository\SfdcRepository")
 */
class SfdcCase
{
    /////////////////////
    // Internal fields //
    /////////////////////

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id; // NOTE: this is no auto-increment, it's the field called "CaseNumber" in SFDC

    /** @ORM\Column(name="Origin", type="string") */
    protected $origin;

    /** @ORM\Column(name="Technology__c", type="string") */
    protected $technology;
    
    /** @ORM\Column(name="Country__c", type="string") */
    protected $country;

    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return SfdcCase
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return SfdcCase
     */
    public function setOrigin( $origin )
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

   
    /**
     * Set technology
     *
     * @param string $technology
     * @return SfdcCase
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;

        return $this;
    }

    /**
     * Get technology
     *
     * @return string
     */
    public function getTechnology()
    {
        return $this->technology;
    }

     /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    
}
