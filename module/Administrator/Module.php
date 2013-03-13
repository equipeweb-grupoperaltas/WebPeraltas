<?php

/**
 * @file           Module.php
 * @package        Administrator
 * @author         Fabio Pratta <fabiobrotas@hotmail.com>
 * @license        default 
 * @copyright      Copyright - www.peraltas.com.br | 13/03/2013
 * @version        Release: 1.0
 * @since 13/03/2013
 */

# namespace no qual se encontra Module.php
namespace Administrator;

class Module
{

    # include file config options
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    # autoloader  for namescapes
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

}
