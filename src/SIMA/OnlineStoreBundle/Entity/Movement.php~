<?php

namespace SIMA\OnlineStoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movement
 *
 * @ORM\Table(name="movement")
 * @ORM\Entity(repositoryClass="SIMA\OnlineStoreBundle\Repository\MovementRepository")
 */
class Movement
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
     * @ORM\Column(name="movmentDate", type="datetime")
     */
    private $movmentDate;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne( targetEntity="SIMA\OnlineStoreBundle\Entity\Article" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\ManyToMany(targetEntity="SIMA\OnlineStoreBundle\Entity\Repository")
     * @ORM\JoinTable(name="movement_repository_source",
     *      joinColumns={@ORM\JoinColumn(name="movement_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="repository_source_id", referencedColumnName="id")}
     *      )
     */
    private $repositorySource;

    /**
     * @ORM\ManyToMany(targetEntity="SIMA\OnlineStoreBundle\Entity\Repository")
     * @ORM\JoinTable(name="movement_repository_target",
     *      joinColumns={@ORM\JoinColumn(name="movement_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="repository_target_id", referencedColumnName="id")}
     *      )
     */
    private $repositoryTarget;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="date")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateAt", type="date")
     */
    private $updateAt;

    /**
    * @ORM\Column(type="boolean", name="is_deleted", options={"default": false})
    */
    private $isDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="date")
     */
    private $deletedAt;

    /**
     * @ORM\ManyToOne( targetEntity="SIMA\OnlineStoreBundle\Entity\User" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $addedBy;

     /**
     * @ORM\ManyToOne( targetEntity="SIMA\OnlineStoreBundle\Entity\User" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $deletedBy;

     /**
     * @ORM\ManyToOne( targetEntity="SIMA\OnlineStoreBundle\Entity\User" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $updatedBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repositorySource = new \Doctrine\Common\Collections\ArrayCollection();
        $this->repositoryTarget = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set movmentDate
     *
     * @param \DateTime $movmentDate
     *
     * @return Movement
     */
    public function setMovmentDate($movmentDate)
    {
        $this->movmentDate = $movmentDate;

        return $this;
    }

    /**
     * Get movmentDate
     *
     * @return \DateTime
     */
    public function getMovmentDate()
    {
        return $this->movmentDate;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Movement
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set article
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Article $article
     *
     * @return Movement
     */
    public function setArticle(\SIMA\OnlineStoreBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \SIMA\OnlineStoreBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Add repositorySource
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Repository $repositorySource
     *
     * @return Movement
     */
    public function addRepositorySource(\SIMA\OnlineStoreBundle\Entity\Repository $repositorySource)
    {
        $this->repositorySource[] = $repositorySource;

        return $this;
    }

    /**
     * Remove repositorySource
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Repository $repositorySource
     */
    public function removeRepositorySource(\SIMA\OnlineStoreBundle\Entity\Repository $repositorySource)
    {
        $this->repositorySource->removeElement($repositorySource);
    }

    /**
     * Get repositorySource
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepositorySource()
    {
        return $this->repositorySource;
    }

    /**
     * Add repositoryTarget
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Repository $repositoryTarget
     *
     * @return Movement
     */
    public function addRepositoryTarget(\SIMA\OnlineStoreBundle\Entity\Repository $repositoryTarget)
    {
        $this->repositoryTarget[] = $repositoryTarget;

        return $this;
    }

    /**
     * Remove repositoryTarget
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Repository $repositoryTarget
     */
    public function removeRepositoryTarget(\SIMA\OnlineStoreBundle\Entity\Repository $repositoryTarget)
    {
        $this->repositoryTarget->removeElement($repositoryTarget);
    }

    /**
     * Get repositoryTarget
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepositoryTarget()
    {
        return $this->repositoryTarget;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Movement
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Movement
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set isDeleted
     *
     * @param \boolean $isDeleted
     *
     * @return Movement
     */
    public function setIsDeleted(\boolean $isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return \boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Movement
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set addedBy
     *
     * @param \SIMA\OnlineStoreBundle\Entity\User $addedBy
     *
     * @return Movement
     */
    public function setAddedBy(\SIMA\OnlineStoreBundle\Entity\User $addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return \SIMA\OnlineStoreBundle\Entity\User
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set deletedBy
     *
     * @param \SIMA\OnlineStoreBundle\Entity\User $deletedBy
     *
     * @return Movement
     */
    public function setDeletedBy(\SIMA\OnlineStoreBundle\Entity\User $deletedBy)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get deletedBy
     *
     * @return \SIMA\OnlineStoreBundle\Entity\User
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Set updatedBy
     *
     * @param \SIMA\OnlineStoreBundle\Entity\User $updatedBy
     *
     * @return Movement
     */
    public function setUpdatedBy(\SIMA\OnlineStoreBundle\Entity\User $updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \SIMA\OnlineStoreBundle\Entity\User
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
