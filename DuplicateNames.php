<?php

$number = readline();
$arr = [];
$arr2 = [];

for($i=0; $i<$number; $i++)
{
    $str = readline();
    if (in_array($str, $arr) && !in_array($str, $arr2))
        $arr2[] = $str;
    else
        $arr[] = $str;
}

$number = sizeof($arr2);

for ($i=0; $i<$number; $i++)
{
    echo $arr2[$i];
    echo "\n";
}