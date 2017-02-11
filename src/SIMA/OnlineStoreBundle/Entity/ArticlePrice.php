<?php

namespace SIMA\OnlineStoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticlePrice
 *
 * @ORM\Table(name="article_price")
 * @ORM\Entity(repositoryClass="SIMA\OnlineStoreBundle\Repository\ArticlePriceRepository")
 */
class ArticlePrice
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
     * @var float
     *
     * @ORM\Column(name="purchasePrice", type="float")
     */
    private $purchasePrice;

    /**
     * @var float
     *
     * @ORM\Column(name="priceHT", type="float")
     */
    private $priceHT;

    /**
     * @var float
     *
     * @ORM\Column(name="priceTTC", type="float")
     */
    private $priceTTC;

    /**
     * @var float
     *
     * @ORM\Column(name="priceQuotation", type="float")
     */
    private $priceQuotation;

    /**
     * @var float
     *
     * @ORM\Column(name="priceDiscont", type="float")
     */
    private $priceDiscont;

    /**
     * @var string
     *
     * @ORM\Column(name="offerPrrice", type="string", length=255)
     */
    private $offerPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier", type="string", length=255)
     */
    private $supplier;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set purchasePrice
     *
     * @param float $purchasePrice
     *
     * @return ArticlePrice
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * Get purchasePrice
     *
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * Set priceHT
     *
     * @param float $priceHT
     *
     * @return ArticlePrice
     */
    public function setPriceHT($priceHT)
    {
        $this->priceHT = $priceHT;

        return $this;
    }

    /**
     * Get priceHT
     *
     * @return float
     */
    public function getPriceHT()
    {
        return $this->priceHT;
    }

    /**
     * Set priceTTC
     *
     * @param float $priceTTC
     *
     * @return ArticlePrice
     */
    public function setPriceTTC($priceTTC)
    {
        $this->priceTTC = $priceTTC;

        return $this;
    }

    /**
     * Get priceTTC
     *
     * @return float
     */
    public function getPriceTTC()
    {
        return $this->priceTTC;
    }

    /**
     * Set priceQuotation
     *
     * @param float $priceQuotation
     *
     * @return ArticlePrice
     */
    public function setPriceQuotation($priceQuotation)
    {
        $this->priceQuotation = $priceQuotation;

        return $this;
    }

    /**
     * Get priceQuotation
     *
     * @return float
     */
    public function getPriceQuotation()
    {
        return $this->priceQuotation;
    }

    /**
     * Set priceDiscont
     *
     * @param float $priceDiscont
     *
     * @return ArticlePrice
     */
    public function setPriceDiscont($priceDiscont)
    {
        $this->priceDiscont = $priceDiscont;

        return $this;
    }

    /**
     * Get priceDiscont
     *
     * @return float
     */
    public function getPriceDiscont()
    {
        return $this->priceDiscont;
    }

    /**
     * Set offerPrice
     *
     * @param string $offerPrice
     *
     * @return ArticlePrice
     */
    public function setOfferPrice($offerPrice)
    {
        $this->offerPrice = $offerPrice;

        return $this;
    }

    /**
     * Get offerPrice
     *
     * @return string
     */
    public function getOfferPrice()
    {
        return $this->offerPrice;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     *
     * @return ArticlePrice
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ArticlePrice
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
     * @return ArticlePrice
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
     * @return ArticlePrice
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
     * @return ArticlePrice
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
     * @return ArticlePrice
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
     * @return ArticlePrice
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
     * @return ArticlePrice
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
