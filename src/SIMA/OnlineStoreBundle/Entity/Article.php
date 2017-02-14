<?php

namespace SIMA\OnlineStoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="SIMA\OnlineStoreBundle\Repository\ArticleRepository")
 * @ORM\HaslifecycleCallbacks()
 */
class Article
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
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=255)
     */
    private $manufacturer;

    /**
     * @ORM\ManyToOne( targetEntity="SIMA\OnlineStoreBundle\Entity\Category" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany( targetEntity="SIMA\OnlineStoreBundle\Entity\Picture", mappedBy="article" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $pictures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="date", nullable=true))
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateAt", type="date", nullable=true)
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
        $this->pictures = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Article
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Article
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
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
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return Article
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set category
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(\SIMA\OnlineStoreBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \SIMA\OnlineStoreBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set articleModel
     *
     * @param \SIMA\OnlineStoreBundle\Entity\ArticleModel $articleModel
     *
     * @return Article
     */
    public function setArticleModel(\SIMA\OnlineStoreBundle\Entity\ArticleModel $articleModel)
    {
        $this->articleModel = $articleModel;

        return $this;
    }

    /**
     * Get articleModel
     *
     * @return \SIMA\OnlineStoreBundle\Entity\ArticleModel
     */
    public function getArticleModel()
    {
        return $this->articleModel;
    }

    /**
     * Set articlePrice
     *
     * @param \SIMA\OnlineStoreBundle\Entity\ArticlePrice $articlePrice
     *
     * @return Article
     */
    public function setArticlePrice(\SIMA\OnlineStoreBundle\Entity\ArticlePrice $articlePrice)
    {
        $this->articlePrice = $articlePrice;

        return $this;
    }

    /**
     * Get articlePrice
     *
     * @return \SIMA\OnlineStoreBundle\Entity\ArticlePrice
     */
    public function getArticlePrice()
    {
        return $this->articlePrice;
    }

    /**
     * Add picture
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Picture $picture
     *
     * @return Article
     */
    public function addPicture(\SIMA\OnlineStoreBundle\Entity\Picture $picture)
    {
        $this->pictures[] = $picture;

        return $this;
    }

    /**
     * Remove picture
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Picture $picture
     */
    public function removePicture(\SIMA\OnlineStoreBundle\Entity\Picture $picture)
    {
        $this->pictures->removeElement($picture);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Article
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
     * @return Article
     */
    public function setUpdateAt($updateAt = null)
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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

    /**
    * @ORM\PrePersist
    */
    public function setCreatedAtValue(){
        $this->createdAt = new \DateTime();
        $this->isDeleted = false;
    }

    /**
    * @ORM\PreUpdate
    */
    public function setUpdatedAtValue(){
        $this->updatedBy = $this->getUser();
        $this->updateAt = new \DateTime();
    }
}
