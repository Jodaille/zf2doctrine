<?php
namespace Catalog\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CatalogFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $model = new \Catalog\Model\Catalog();
        $model->setServiceLocator($serviceLocator);
        return $model;
    }
}