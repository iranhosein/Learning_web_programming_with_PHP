<?php
$n = readline();
$sum = 0;
while($n!=0)
{
    $sum += $n % 10;
    $n = intdiv($n, 10);
}
echo $sum;