<?php

namespace Catalog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $em;

    public function indexAction()
    {
	$pageid        = $this->params()->fromPost('pageid', FALSE);
	$catalog_id    = $this->params('id', 1);

	$catalogRepository = $this->getEntityManager()->getRepository('Catalog\Entity\Catalog');
        
        $catalog = $catalogRepository->find($catalog_id);

        $factory 	= $this->getServiceLocator()->get('catalog');
        $testCatalog 	= $factory->getCatalog($name = 'test');

        return new ViewModel(array('catalog' => $catalog,
				   'testCatalog' => $testCatalog,
				  ));
    }

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }

}

