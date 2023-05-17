<?php

function getHighestPrice()
{
    global $data;
    
    if ( $data == null )
        return null;
    
    $name = $data[0]['name'];
    $price = $data[0]['price'];
    
    for ( $i=0; $i<sizeof($data); $i++ )
    {
        if ( $data[$i]['price'] > $price )
        {
            $price = $data[$i]['price'];
            $name = $data[$i]['name'];
        }
    }
    
    return $name;
}