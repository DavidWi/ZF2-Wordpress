<?php

return array(
    'wordpress_folder_name' => 'wordpress',
    'router' => array(
        'routes' => array(
            /*
             * Activate this route if you want Wordpress to catch everything that does not match another route.
             * Make sure that you don't use routes with a priority that it less than -100 (no priority is fine).
             */
            'wordpressCatchAll' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'priority' => -100,
                'options' => array(
                    'route' => '/:pagepath',
                    'constraints' => array(
                        'pagepath' => '.*'
                    ),
                    'defaults' => array(
                        'controller' => 'Wordpress\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            /*
             * Activate this route if you want to configure a list of allowed urls.
             * You are able to use regular expressions here as well.
             */
            'wordpressCatchList' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route' => '/:pagepath',
                    'constraints' => array(
                        'pagepath' =>
                        '()|'
                        . '(examplepage1)|'
                        . '(examplepage2)|'
                        . '(examplepage/with-subpath)|'
                        . '(examplepage/with-another-subpath)'
                    ),
                    'defaults' => array(
                        'controller' => 'Wordpress\Controller\Index',
                        'action' => 'index',
                    ),
                ),
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
            'layout/empty' => __DIR__ . '/../view/layout/empty.phtml',
        ),
    ),
);
