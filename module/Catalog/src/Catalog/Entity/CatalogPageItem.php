<?php

namespace Catalog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatalogPageItem
 */
class CatalogPageItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $externid;

    /**
     * @var integer
     */
    private $displayorder;

    /**
     * @var \Catalog\Entity\CatalogPage
     */
    private $catalogpage;


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
     * Set type
     *
     * @param string $type
     * @return CatalogPageItem
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set externid
     *
     * @param integer $externid
     * @return CatalogPageItem
     */
    public function setExternid($externid)
    {
        $this->externid = $externid;

        return $this;
    }

    /**
     * Get externid
     *
     * @return integer 
     */
    public function getExternid()
    {
        return $this->externid;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return CatalogPageItem
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set catalogpage
     *
     * @param \Catalog\Entity\CatalogPage $catalogpage
     * @return CatalogPageItem
     */
    public function setCatalogpage(\Catalog\Entity\CatalogPage $catalogpage = null)
    {
        $this->catalogpage = $catalogpage;

        return $this;
    }

    /**
     * Get catalogpage
     *
     * @return \Catalog\Entity\CatalogPage 
     */
    public function getCatalogpage()
    {
        return $this->catalogpage;
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
