<?php

namespace SIMA\OnlineStoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleModel
 *
 * @ORM\Table(name="article_model")
 * @ORM\Entity(repositoryClass="SIMA\OnlineStoreBundle\Repository\ArticleModelRepository")
 */
class ArticleModel
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
     * @ORM\Column(name="Label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier", type="string", length=255)
     */
    private $supplier;

    /**
     * @ORM\OneToMany( targetEntity="SIMA\OnlineStoreBundle\Entity\TechnicalDetailItem", mappedBy="articleModel" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $technicalDetailItems;

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
     * @ORM\OneToOne( targetEntity="SIMA\OnlineStoreBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->technicalDetailItems = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set label
     *
     * @param string $label
     *
     * @return ArticleModel
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     *
     * @return ArticleModel
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Add technicalDetailItem
     *
     * @param \SIMA\OnlineStoreBundle\Entity\TechnicalDetailItem $technicalDetailItem
     *
     * @return ArticleModel
     */
    public function addTechnicalDetailItem(\SIMA\OnlineStoreBundle\Entity\TechnicalDetailItem $technicalDetailItem)
    {
        $this->technicalDetailItems[] = $technicalDetailItem;

        return $this;
    }

    /**
     * Remove technicalDetailItem
     *
     * @param \SIMA\OnlineStoreBundle\Entity\TechnicalDetailItem $technicalDetailItem
     */
    public function removeTechnicalDetailItem(\SIMA\OnlineStoreBundle\Entity\TechnicalDetailItem $technicalDetailItem)
    {
        $this->technicalDetailItems->removeElement($technicalDetailItem);
    }

    /**
     * Get technicalDetailItems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTechnicalDetailItems()
    {
        return $this->technicalDetailItems;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ArticleModel
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
     * @return ArticleModel
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
     * @return ArticleModel
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
     * @return ArticleModel
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
     * @return ArticleModel
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
     * @return ArticleModel
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
     * @return ArticleModel
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
