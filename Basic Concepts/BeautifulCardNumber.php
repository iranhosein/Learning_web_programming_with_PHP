<?PHP

function formatCardNumber($str)
{
    if ( ctype_digit($str) )
    {
        $nstr = $str[0];
        for ($i=1; $i<16; $i++)
        {
            if($i%4 == 0)
                $nstr .= ' ';
            $nstr .= $str[$i];
        }
        return $nstr;
    }
    
    return NULL;
}