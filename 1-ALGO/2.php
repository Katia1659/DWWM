<?php
//Quelles serony les valeurs des variables a, B et C aprés exécutions suivantes ?

// a = 5          a = 5    b = ?   c = ?
// b = 3          a = 5    b = 3   c = ?
// c = a + b      a = 5    b = 3   c = 8
// a = 2          a = 2    b = 3   c = 8
// c = b - 2      a = 2    b = 3   c = 1

// $a = 5;
// $b = 3;
// $c = $a + b;
// $a = 2;
// $c = b - 2;

//echo 'debut';
//echo "\n";
//echo $a;
//echo "\n";
//echo $b;
//echo "\n";
//echo $c;
//echo "\n";
//echo 'fin';

//inisilisation des var
$a = 5;
$b = 3;
$c = $a + $b;
$a = 2;
$c = $b - 2;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'fin';
?>