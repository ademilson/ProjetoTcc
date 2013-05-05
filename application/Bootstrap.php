<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{

    protected function _initAutoload() {
        $al = Zend_Loader_Autoloader::getInstance();
        $al->setFallbackAutoloader(true);

        $autoloader = new Zend_Application_Module_Autoloader(array(
                    'namespace' => 'default',
                    'basePath' => dirname(__FILE__),
                ));
          
        return $autoloader;
    }
    
}

