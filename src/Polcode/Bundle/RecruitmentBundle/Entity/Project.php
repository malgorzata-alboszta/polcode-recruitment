<?php

namespace Polcode\Bundle\RecruitmentBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContext;

/**
 * Project
 * @  Assert\Callback(methods={"isDateValid"})
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * 
     */
    private $name;

    /**
     * @var DateTime
     * @Assert\NotBlank()
     */
    private $createdAt;

    /**
     * @var DateTime
     * 
     */
    private $endAt;

    /**
     * @var boolean
     * @Assert\NotNull()
     */
    private $isInternal;
    /**
     *
     * @var AM
     */
    private $am;

    public function __construct()
    {
        $this->createdAt= new DateTime();
    }

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
     * Set name
     *
     * @param string $name
     * @return Project
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
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return Project
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set endAt
     *
     * @param DateTime $endAt
     * @return Project
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set isInternal
     *
     * @param boolean $isInternal
     * @return Project
     */
    public function setIsInternal($isInternal)
    {
        $this->isInternal = $isInternal;

        return $this;
    }

    /**
     * Get isInternal
     *
     * @return boolean 
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }

    /**
     * Set am
     *
     * @param AM $am
     * @return Project
     */
    public function setAm(AM $am = null)
    {
        $this->am = $am;

        return $this;
    }

    /**
     * Get am
     *
     * @return AM 
     */
    public function getAm()
    {
        return $this->am;
    }
    
//    public function isDateValid(ExecutionContext $context)
//    {
//        if ($this->createdAt < $this->endAt) {
//            $context->addViolationAt('endAt', 'The end date must be created date !', array(), null);
//        }
//    }
}
