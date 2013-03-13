<?php

/**
 * 
 * @file           module.config.php
 * @author         Fabio Pratta <fabiobrotas@hotmail.com>
 * @license        default 
 * @copyright      Copyright - www.peraltas.com.br | 13/03/2013
 * @version        Release: 1.0
 * @since 13/03/2013
 */

return array(
    # definir controllers
    'controllers' => array(
        'invokables' => array(
            'HomeController' => 'Administrator\Controller\HomeController'
        ),
    ),

    # definir rotas
    'router' => array(
        'routes' => array(
            'home' => array(
                'type'      => 'Literal',
                'options'   => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'HomeController',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    /*
    # definir gerenciador de servicos
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
     * */
    

    # definir layouts, erros, exceptions, doctype base
    'view_manager' => array(
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'template_map'                    => array(
            'layout/layout'               => __DIR__ . '/../view/layout/layout.phtml',
            'administrator/home/index'    => __DIR__ . '/../view/administrator/home/index.phtml',
            'error/404'                   => __DIR__ . '/../view/error/404.phtml',
            'error/index'                 => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);