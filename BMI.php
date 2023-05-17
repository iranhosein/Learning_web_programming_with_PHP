<?php
$height = readline();
$mass = readline();
$bmi = $mass/($height**2);
if ($bmi < 18.5){
    echo "Underweight";
}
elseif ($bmi<25) {
    echo "Normal";
}
elseif ($bmi < 30){
    echo "Overweight";
}
else{
    echo "Obese";
}