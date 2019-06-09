<?php

namespace ScrumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Epics
 *
 * @ORM\Table(name="epics")
 * @ORM\Entity(repositoryClass="ScrumBundle\Repository\EpicsRepository")
 */
class Epics
{


    /**
     * @ORM\ManyToOne(targetEntity="ScrumBundle\Entity\Project", inversedBy="project")
     * @JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $epics;
    /**
     *
     * @ORM\OneToMany(targetEntity="ScrumBundle\Entity\UserStory", mappedBy="story")
     * @JoinColumn(name="story_id", referencedColumnName="id")
     */
    protected $epic_story;



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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="sommeComplex", type="integer")
     */
    private $sommeComplex;


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
     * @return Epics
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
     * Set description
     *
     * @param string $description
     *
     * @return Epics
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
     * Set sommeComplex
     *
     * @param integer $sommeComplex
     *
     * @return Epics
     */
    public function setSommeComplex($sommeComplex)
    {
        $this->sommeComplex = $sommeComplex;

        return $this;
    }

    /**
     * Get sommeComplex
     *
     * @return int
     */
    public function getSommeComplex()
    {
        return $this->sommeComplex;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->epic_story = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set epics
     *
     * @param \ScrumBundle\Entity\Project $epics
     *
     * @return Epics
     */
    public function setEpics(\ScrumBundle\Entity\Project $epics = null)
    {
        $this->epics = $epics;

        return $this;
    }

    /**
     * Get epics
     *
     * @return \ScrumBundle\Entity\Project
     */
    public function getEpics()
    {
        return $this->epics;
    }

    /**
     * Add epicStory
     *
     * @param \ScrumBundle\Entity\UserStory $epicStory
     *
     * @return Epics
     */
    public function addEpicStory(\ScrumBundle\Entity\UserStory $epicStory)
    {
        $this->epic_story[] = $epicStory;

        return $this;
    }

    /**
     * Remove epicStory
     *
     * @param \ScrumBundle\Entity\UserStory $epicStory
     */
    public function removeEpicStory(\ScrumBundle\Entity\UserStory $epicStory)
    {
        $this->epic_story->removeElement($epicStory);
    }

    /**
     * Get epicStory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpicStory()
    {
        return $this->epic_story;
    }



}
