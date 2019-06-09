<?php

namespace ScrumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * UserStory
 *
 * @ORM\Table(name="user_story")
 * @ORM\Entity(repositoryClass="ScrumBundle\Repository\UserStoryRepository")
 */
class UserStory
{

    /**
     * @ORM\ManyToOne(targetEntity="ScrumBundle\Entity\Epics", inversedBy="epic_story")
     * @JoinColumn(name="epic_id", referencedColumnName="id")
     */
    protected $story;



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
     * @ORM\Column(name="BV", type="integer")
     */
    private $bV;

    /**
     * @var string
     *
     * @ORM\Column(name="priorite", type="string", length=255)
     */
    private $priorite;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var int
     *
     * @ORM\Column(name="ptComplex", type="integer")
     */
    private $ptComplex;


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
     * @return UserStory
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
     * @return UserStory
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
     * Set bV
     *
     * @param integer $bV
     *
     * @return UserStory
     */
    public function setBV($bV)
    {
        $this->bV = $bV;

        return $this;
    }

    /**
     * Get bV
     *
     * @return int
     */
    public function getBV()
    {
        return $this->bV;
    }

    /**
     * Set priorite
     *
     * @param string $priorite
     *
     * @return UserStory
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;

        return $this;
    }

    /**
     * Get priorite
     *
     * @return string
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return UserStory
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set ptComplex
     *
     * @param integer $ptComplex
     *
     * @return UserStory
     */
    public function setPtComplex($ptComplex)
    {
        $this->ptComplex = $ptComplex;

        return $this;
    }

    /**
     * Get ptComplex
     *
     * @return int
     */
    public function getPtComplex()
    {
        return $this->ptComplex;
    }

    /**
     * Set story
     *
     * @param \ScrumBundle\Entity\Epics $story
     *
     * @return UserStory
     */
    public function setStory(\ScrumBundle\Entity\Epics $story = null)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story
     *
     * @return \ScrumBundle\Entity\Epics
     */
    public function getStory()
    {
        return $this->story;
    }
}
