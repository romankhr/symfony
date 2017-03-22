<?php

namespace SoftGroup\CompaniesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Name
 *
 * @ORM\Table(name="name")
 * @ORM\Entity(repositoryClass="SoftGroup\CompaniesBundle\Repository\NameRepository")
 */
class Name
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CompaniName", type="string", length=255, nullable=true, unique=true)
     */
    private $companiName;

    /**
     * @var string
     *
     * @ORM\Column(name="Adres", type="string", length=255)
     */
    private $adres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, unique=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="Persons", type="integer", nullable=true)
     */
    private $persons;

    /**
     * @var string
     *
     * @ORM\Column(name="Web", type="string", length=255)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="Progects", type="text")
     */
    private $progects;


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
     * Set companiName
     *
     * @param string $companiName
     * @return Name
     */
    public function setCompaniName($companiName)
    {
        $this->companiName = $companiName;

        return $this;
    }

    /**
     * Get companiName
     *
     * @return string 
     */
    public function getCompaniName()
    {
        return $this->companiName;
    }

    /**
     * Set adres
     *
     * @param string $adres
     * @return Name
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string 
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Name
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Name
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
     * Set persons
     *
     * @param integer $persons
     * @return Name
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;

        return $this;
    }

    /**
     * Get persons
     *
     * @return integer 
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Name
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set progects
     *
     * @param string $progects
     * @return Name
     */
    public function setProgects($progects)
    {
        $this->progects = $progects;

        return $this;
    }

    /**
     * Get progects
     *
     * @return string 
     */
    public function getProgects()
    {
        return $this->progects;
    }
}
