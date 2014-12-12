<?php
namespace Catalog\Model;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Catalog
{
    protected   $em;
    protected   $servicelocator;
    private     $_catalog_version;

    public function getCatalog($name)
    {
	$catalogRepository = $this->getEntityManager()->getRepository('Catalog\Entity\Catalog');
        
        $catalog = $catalogRepository->findOneByName($name);
        
        return $catalog;
    }

    public function getEntityManager()
    {
        if (null === $this->em)
        {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->servicelocator = $serviceLocator;
    }
    public function getServiceLocator()
    {
        return $this->servicelocator;
    }
} 
