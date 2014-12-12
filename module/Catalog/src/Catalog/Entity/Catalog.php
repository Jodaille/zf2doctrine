<?php

namespace Catalog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalog
 */
class Catalog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var integer
     */
    private $current_version;

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
    private $catalogspages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catalogspages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Catalog
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
     * Set version
     *
     * @param string $version
     * @return Catalog
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set current_version
     *
     * @param integer $currentVersion
     * @return Catalog
     */
    public function setCurrentVersion($currentVersion)
    {
        $this->current_version = $currentVersion;

        return $this;
    }

    /**
     * Get current_version
     *
     * @return integer 
     */
    public function getCurrentVersion()
    {
        return $this->current_version;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Catalog
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
     * @return Catalog
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
     * Add catalogspages
     *
     * @param \Catalog\Entity\CatalogPage $catalogspages
     * @return Catalog
     */
    public function addCatalogspage(\Catalog\Entity\CatalogPage $catalogspages)
    {
        $this->catalogspages[] = $catalogspages;

        return $this;
    }

    /**
     * Remove catalogspages
     *
     * @param \Catalog\Entity\CatalogPage $catalogspages
     */
    public function removeCatalogspage(\Catalog\Entity\CatalogPage $catalogspages)
    {
        $this->catalogspages->removeElement($catalogspages);
    }

    /**
     * Get catalogspages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatalogspages()
    {
        return $this->catalogspages;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->created_at = new \DateTime("now");
        $this->updated_at = new \DateTime("now");
    }
    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->updated_at = new \DateTime("now");
    }
}
