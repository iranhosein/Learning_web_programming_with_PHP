<?php

function color(&$ls)
{
    for ( $i=0; $i<count($ls); $i++ )
    {
		
        if ( $i==0 || $i==count($ls)-1 )
        {			
			for ( $j=0; $j<count($ls[$i]); $j++ )
            {
                for ( $k=0; $k<count($ls[$i][$j]); $k++)
                {
                    $ls[$i][$j][$k] = 1;
                }
            }
			
        }
        else
        {
            for ( $j=0; $j<count($ls[$i]); $j++ )
            {
                for ( $k=0; $k<count($ls[$i][$j]); $k++)
                {
                    if ( $k==0 || $j==0 || $j==count($ls[$i])-1 || $k==count($ls[$i][$j])-1 )
                    {
                        $ls[$i][$j][$k] = 1;
                    }
                    else
                    {
                        $ls[$i][$j][$k] = 0;
                    }
                }
            }
        }
    }
}