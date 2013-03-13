<?php

/**
 * @file           HomeController.php
 * @package        Expression package is undefined on line 4, column 22 in Templates/Scripting/PHPClass.php.
 * @author         Fabio Pratta <fabiobrotas@hotmail.com>
 * @license        default 
 * @copyright      Copyright - www.peraltas.com.br | 13/03/2013
 * @version        Release: 1.0
 * @since 13/03/2013
 */

# namespace de localizacao HomeController.php
namespace Administrator\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{

    # action index
    public function indexAction()
    {
        return new ViewModel();
    }

}

