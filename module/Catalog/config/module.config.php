<?php
namespace Catalog;
return array(
    'controllers' => array(
        'invokables' => array(
            'Catalog\Controller\Index' => 'Catalog\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'router' => array(
        'routes' => array(
            'catalog' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/catalog',
                    'defaults' => array(
                        'controller' => 'Catalog\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
	  ),
	),
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\YamlDriver',
                'cache' => 'array',
                'extension' => '.dcm.yml',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Mapping')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
                ),
            ),
        ),
        'configuration' => array(
            'orm_default' => array(
                'proxy_dir' => __DIR__ . '/../src/' . __NAMESPACE__ . '/Proxy',
                'proxy_namespace' => __NAMESPACE__ .'\Proxy',
            ),
        ),
    ),
 );