<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobPosition
 *
 * @ORM\Table(name="job_position")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JobPositionRepository")
 */
class JobPosition
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="employment_type", type="string", length=255)
     */
    private $employmentType;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_alt", type="string", length=255)
     */
    private $logoAlt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return JobPosition
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return JobPosition
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
//        return "<a href=\".$this->link .\">link</a>";
        return $this->link;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return JobPosition
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return JobPosition
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set employmentType
     *
     * @param string $employmentType
     *
     * @return JobPosition
     */
    public function setEmploymentType($employmentType)
    {
        $this->employmentType = $employmentType;

        return $this;
    }

    /**
     * Get employmentType
     *
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return JobPosition
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return JobPosition
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set logoAlt
     *
     * @param string $logoAlt
     *
     * @return JobPosition
     */
    public function setLogoAlt($logoAlt)
    {
        $this->logoAlt = $logoAlt;

        return $this;
    }

    /**
     * Get logoAlt
     *
     * @return string
     */
    public function getLogoAlt()
    {
        return $this->logoAlt;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return JobPosition
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
}

