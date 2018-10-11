<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 5:47 AM
 */
//213231231231
// Use and autoloader!
require_once 'app/core/Bootstrap.php';
require_once 'app/core/Controller.php';
require_once 'app/core/Model.php';
require_once 'app/core/View.php';

try
{
    $app = new Bootstrap();
}
catch(Exception $e)
{
    //TO-DO something here
}
