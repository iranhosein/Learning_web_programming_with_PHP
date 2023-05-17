<?php
$array = [];
for ($i=0; $i<5; $i++){
    $input = readline();
    $array[$i] = $input;
}

$flag = false;

$input = readline();
for ($i=0; $i<5; $i++){
    if ($input == $array[$i]){
        $flag = true;
        break;
    }
}

if ($flag == false)
    echo "NO";
else
    echo "YES";