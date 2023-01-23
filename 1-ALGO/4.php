<?php
//Quelles seront les valeurs des variables A, B et C apres exécution suivantes

// a = 3;       a = 3   b = ??   c = ??
// b = 10;      a = 3   b = 10   c = ??
// c = a + b;   a = 3   b = 10   c = 13
// b = a + b;   a = 3   b = 13   c = 13
// a = c;       a = 13   b = 13   c = 13

// $a = 3;
// $b = 10;
// $c = $a + $b;
// $b = $a + $b;
// $a = $c;

// echo 'debut';
// echo "\n";
// echo $a = 3;
// echo "\n";
// echo $b = 10;
// echo "\n";
// echo $c = $a + $b
// echo "\n";
// echo $b = $a + $b;
// echo "\n";
// echo $a = $c;
// echo "\n";
// echo 'fin';

//inisilisation des var
$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

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