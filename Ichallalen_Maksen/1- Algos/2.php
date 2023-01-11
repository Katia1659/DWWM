<?php
/*Quelles seront les valeurs des variables A, B et C après
exécution des instructions suivantes ?
var A, B, C :Entier

a = 5
b = 3
c = a + b
a = 2
c = b - a
*/


$a = 5;
$b = 3;
$c = $a + $b;
$a = 2;
$c = $b - $a;

echo 'Début';
echo"\n";
echo 'a = ',$a;
echo"\n";
echo 'b = ',$b;
echo"\n";
echo 'c = ',$c;
echo "\n";
echo 'Fin';
?>