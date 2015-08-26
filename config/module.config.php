<?php

return array(
    'wordpress_folder_name' => 'wordpress',
    'router' => array(
        'router_class' => 'Wordpress\Router\Http\TreeRouteStack',
        'defaultRoute' => array(
            'name' => 'wordpressCatchAll',
            'params' => array(
                'controller' => 'Index',
                '__NAMESPACE__' => 'Wordpress\Controller',
                'action' => 'Index'
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Wordpress\Controller\Index' => 'Wordpress\Controller\Factory\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'wordpress/index/index' => __DIR__ . '/../view/wordpress/index/index.phtml',
            'layout/empty'           => __DIR__ . '/../view/layout/empty.phtml',
        ),
    ),
);
