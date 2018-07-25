<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 6:22 AM
 */

class ErrorClass extends  Controller
{
    /**
     * ErrorClass constructor.
     */
    public function __construct()
    {
        parent::__construct();
        echo 'Sorry, seems you have found a faulty link: '.  $_GET["url"] .' <br/>';
        echo 'This file Does not exist!. <br/>';
    }
}
