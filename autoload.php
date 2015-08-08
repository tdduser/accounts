<?php
/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 16:04
 */

function __autoload($classname) {
    if (file_exists($classname . '.php'))
    {
        include_once($classname . '.php');
    }
    elseif (file_exists('./performer/' . $classname . '.php'))
    {
        include_once('./performer/' . $classname . '.php');
    }

    elseif (file_exists('./databases/' . $classname . '.php'))
    {
        include_once('./databases/' . $classname . '.php');
    }
}