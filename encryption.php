<?php

function encrypt($str, $n)
{
    $nstr = '';
    for ( $i=0; $i<strlen($str); $i++ )
    {
        $number = ord($str[$i]);
        if ( $number > 96 )
        {
            $number -= 97;
            $number = ($number + $n) % 26;
            $number += 97;
        }
        else
        {
            $number -= 65;
            $number = ($number + $n) % 26;
            $number += 65;
        }
        $nstr .= chr($number);
    }
    return $nstr;
}

function decrypt($str, $n)
{
    $nstr = '';
    for ( $i=0; $i<strlen($str); $i++ )
    {
        $number = ord($str[$i]);
        if ( $number > 96 )
        {
            $number -= 97;
            $number = ($number - $n) % 26;
            if ( $number < 0 )
                $number += 26;
            $number += 97;
        }
        else
        {
            $number -= 65;
            $number = ($number - $n) % 26;
            if ( $number < 0 )
                $number += 26;
            $number += 65;
        }
        $nstr .= chr($number);
    }
    return $nstr;
}
