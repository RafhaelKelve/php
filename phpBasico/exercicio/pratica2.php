<?php
$product1 = "Computer";
$product2 = "Office desk";

$age = 30;
$code = 5290;
$gender = 'F';

$price1 = 2100.0;
$price2 = 650.50;
$measure = 53.234567;

echo "Products:<br>";
echo  $product1. ", which price is R$: ".$price1."<br>";
echo $product2. ", which price is R$ ". $price2."<br>";
echo "Record: $age years old, code $code and gender : $gender<br>";
echo "Measure with eight decimal places : $measure<br>";
echo "Rouded (three decimal places): $measure<br>";
echo "US decimal point: $measure";
?>