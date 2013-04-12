<?php

namespace Administration;

class Module {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
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

    public function getServiceConfig() {
        return array(
            'factories' => array(
                'Zend\Log\FirePhp' => function($sm) {
                    $writer_firebug = new \Zend\Log\Writer\FirePhp();
                    $logger = new \Zend\Log\Logger();
                    $logger->addWriter($writer_firebug);
                    return $logger;
                },
            ),
        );
    }

}

