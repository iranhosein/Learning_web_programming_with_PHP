<?php

$n = readline();
$name = readline();
$flag = false;

for ($i=0; $i<$n; $i++)
{
    if ($name == readline())
    {
        $flag = true;
    }
}

if ($flag == false)
{
    echo "NO";
}
else
{
    echo "YES";
}