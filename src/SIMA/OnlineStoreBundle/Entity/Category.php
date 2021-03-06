<?php

namespace SIMA\OnlineStoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="SIMA\OnlineStoreBundle\Repository\CategoryRepository")
 * @ORM\HaslifecycleCallbacks()
 */
class Category
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
     * @ORM\Column(name="code_category", type="integer")
     */
    private $codeCategory;


    /**
     * One Category has Many Categories.
     * @ORM\OneToMany(targetEntity="Category", mappedBy="categoryParent")
     */
    private $subCategories;

    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="subCategories")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $categoryParent;

    /**
     * @ORM\OneToMany( targetEntity="SIMA\OnlineStoreBundle\Entity\Article", mappedBy="category" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $articles;

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
        $this->subCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

     public function __toString()
    {
        return $this->label;
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
     * @return Category
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
     * Set codeCategory
     *
     * @param integer $codeCategory
     *
     * @return Category
     */
    public function setCodeCategory($codeCategory)
    {
        $this->codeCategory = $codeCategory;

        return $this;
    }

    /**
     * Get codeCategory
     *
     * @return integer
     */
    public function getCodeCategory()
    {
        return $this->codeCategory;
    }

    /**
     * Add subCategory
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Category $subCategory
     *
     * @return Category
     */
    public function addSubCategory(\SIMA\OnlineStoreBundle\Entity\Category $subCategory)
    {
        $this->subCategories[] = $subCategory;

        return $this;
    }

    /**
     * Remove subCategory
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Category $subCategory
     */
    public function removeSubCategory(\SIMA\OnlineStoreBundle\Entity\Category $subCategory)
    {
        $this->subCategories->removeElement($subCategory);
    }

    /**
     * Get subCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * Set categoryParent
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Category $categoryParent
     *
     * @return Category
     */
    public function setCategoryParent(\SIMA\OnlineStoreBundle\Entity\Category $categoryParent = null)
    {
        $this->categoryParent = $categoryParent;

        return $this;
    }

    /**
     * Get categoryParent
     *
     * @return \SIMA\OnlineStoreBundle\Entity\Category
     */
    public function getCategoryParent()
    {
        return $this->categoryParent;
    }

    /**
     * Add article
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Article $article
     *
     * @return Category
     */
    public function addArticle(\SIMA\OnlineStoreBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \SIMA\OnlineStoreBundle\Entity\Article $article
     */
    public function removeArticle(\SIMA\OnlineStoreBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * @return Category
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
