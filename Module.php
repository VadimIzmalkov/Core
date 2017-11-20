<?php

namespace Core;

use Zend\Mvc\Controller\ControllerManager;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
	
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig() 
    {
        return [
            'factories'     => [],
        ];
    }

    public function getControllerConfig() 
    {
        return [
            'factories'     => [],
        ];
    }

    public function getControllerPluginConfig()
    {
        return [
            'factories'     => [],
            'invokables'    => [],
        ];
    }

    public function getViewHelperConfig()
    {
        return [
            'factories'     => [],
        ];  
    }
}