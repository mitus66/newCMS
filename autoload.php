<?php
/**
 * Created by PhpStorm.
 * User: mitus66
 * Date: 18.09.2018
 * Time: 13:47
 */

function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}
