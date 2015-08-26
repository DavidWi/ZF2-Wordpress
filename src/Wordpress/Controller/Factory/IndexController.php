<?php
/**
 * This Controller is used to process requests for wordpress-pages
 */

namespace Wordpress\Controller\Factory;

class IndexController implements \Zend\ServiceManager\FactoryInterface
{
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        //TODO REMOVE
        $controller = new \Wordpress\Controller\IndexController();
        $config = $serviceLocator->getServiceLocator()->get('Config');
        if (isset($config['wordpress_folder_name'])) {
            $controller->setWordpressFolderName($config['wordpress_folder_name']);
        }
        return $controller;
    }
}
