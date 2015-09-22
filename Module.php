<?php

namespace Wordpress;

class Module {

    public function getConfig() {
        $config = include __DIR__ . '/config/module.config.php';
        if (file_exists(__DIR__ . '/config/module.config.custom.php')) {
            $config = array_merge(
                    $config, 
                    include __DIR__ . '/config/module.config.custom.php'
            );
        }
        return $config;
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

}
