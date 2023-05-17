<?php

function charAt(string $str, int $pos): string
{
    if ( $str == null )
        return null;
    
    $number = strlen($str);
    $pos %= $number;
    return $str[$pos];
}
