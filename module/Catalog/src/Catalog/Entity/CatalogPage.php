<?php

namespace Catalog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatalogPage
 */
class CatalogPage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $number;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $catalogpageitems;

    /**
     * @var \Catalog\Entity\Catalog
     */
    private $catalog;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catalogpageitems = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set number
     *
     * @param string $number
     * @return CatalogPage
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return CatalogPage
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return CatalogPage
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add catalogpageitems
     *
     * @param \Catalog\Entity\CatalogPageItem $catalogpageitems
     * @return CatalogPage
     */
    public function addCatalogpageitem(\Catalog\Entity\CatalogPageItem $catalogpageitems)
    {
        $this->catalogpageitems[] = $catalogpageitems;

        return $this;
    }

    /**
     * Remove catalogpageitems
     *
     * @param \Catalog\Entity\CatalogPageItem $catalogpageitems
     */
    public function removeCatalogpageitem(\Catalog\Entity\CatalogPageItem $catalogpageitems)
    {
        $this->catalogpageitems->removeElement($catalogpageitems);
    }

    /**
     * Get catalogpageitems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatalogpageitems()
    {
        return $this->catalogpageitems;
    }

    /**
     * Set catalog
     *
     * @param \Catalog\Entity\Catalog $catalog
     * @return CatalogPage
     */
    public function setCatalog(\Catalog\Entity\Catalog $catalog = null)
    {
        $this->catalog = $catalog;

        return $this;
    }

    /**
     * Get catalog
     *
     * @return \Catalog\Entity\Catalog 
     */
    public function getCatalog()
    {
        return $this->catalog;
    }
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        // Add your code here
    }
}
