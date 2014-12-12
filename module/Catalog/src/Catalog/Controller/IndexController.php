<?php

namespace Catalog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $em;

    public function indexAction()
    {
        // pageid received by POST method
        $pageid        = $this->params()->fromPost('pageid', FALSE);

        // id received by get method (url)
        $catalog_id    = $this->params('id', 1);

        // get Catalog repository
        $catalogRepository = $this->getEntityManager()->getRepository('Catalog\Entity\Catalog');

        // find catalog with id $catalog_id
        $catalog = $catalogRepository->find($catalog_id);

        // call service catalog to get an instance of Model/Catalog
        $factory        = $this->getServiceLocator()->get('catalog');

        // get catalog with name 'test'
        $testCatalog    = $factory->getCatalog($name = 'test');

        // assign result to view
        return new ViewModel(
                            array(
                                'catalog'     => $catalog,
                                'testCatalog' => $testCatalog,
                                )
                            );
    }

    public function addAction()
    {
        /**
        * get data from our form
        */
        $catalogid          = $this->params()->fromPost('catalogid', FALSE);
        $catalogname        = $this->params()->fromPost('catalogname', FALSE);
        $catalogversion     = $this->params()->fromPost('catalogversion', FALSE);

        $catalogRepository = $this->getEntityManager()->getRepository('Catalog\Entity\Catalog');

        // initialize view result
        $viewElements = array();

        // in case we receive something from form
        if($this->request->isPost() && $catalogname)
        {

            $catalog = $catalogRepository->find($catalogid);

            // We cannot find catalog: create a new one
            if(!$catalog)
            {
                $catalog = new \Catalog\Entity\Catalog();
            }

            // Change properties
            $catalog->setName($catalogname);
            $catalog->setVersion($catalogversion);

            // apply modifications
            $this->getEntityManager()->persist($catalog);

            // save data to database
            $this->getEntityManager()->flush();

            // assign result to view
            $viewElements = array('catalog' => $catalog);
        }

        return new ViewModel($viewElements);
    }

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }

}

