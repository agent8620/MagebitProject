<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 6:08 AM
 */

class Bootstrap
{
    /**
     * Bootstrap constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/',$url);
        if($url[0] === 'index.php' || $url[0] ===  '')
        {
            $url[0] = 'index';
        }

        $file = 'app/controller/'.$url[0].'.php';

        if(file_exists($file))
        {
            require_once $file;
            $controller = new $url[0];

            if(isset($url[2]))
            {
                $controller->{$url[1]}($url[2]);
            }
            elseif(isset($url[1]))
            {
                $controller->{$url[1]}();
            }
        }
        else
        {

            require 'app/controller/ErrorClass.php';
            $error = new ErrorClass();
        }
    }
}
