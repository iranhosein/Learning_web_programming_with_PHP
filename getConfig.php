<?php

function getConfig($key)
{
    $conf = include "config.php";
    
    if ( array_key_exists($key, $conf) )
        return $conf[$key];
    
    return null;
    
}