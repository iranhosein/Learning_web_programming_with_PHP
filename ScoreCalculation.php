<?php

$names = [];

for ($i=0; $i<3; $i++){
    $string = readline();
    $names[$string] = 0;
}

for ($i=0; $i<4; $i++){
    $string = readline();
    $number = readline();
    $names[$string] += $number;
}

$max = 0;
$str = "";
$arr = array_keys($names);

for ($i=0; $i<3; $i++){
    if ($names[$arr[$i]] > $max){
        $max = $names[$arr[$i]];
        $str = $arr[$i];
    }
}

echo $str;