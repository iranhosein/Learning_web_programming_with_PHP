<?php

function formatPhoneNumber( $str )
{
    if ( $str[0].$str[1] == '09' )
    {
        return "+98" . ltrim($str, '0');
    }
    
    return NULL;
}