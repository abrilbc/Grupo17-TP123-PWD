<?php

function autoload($class)
{
    include 'controller/' . $class . '.php';
}

spl_autoload_register('autoload');
