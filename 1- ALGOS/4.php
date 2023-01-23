<?php
/*Quelles seront les valeurs des variables A, B et C après
exécution des instructions suivantes ?
Var A, B, C : Entier,


a = 3
b = 10
c = a + b
b = a + b
a = c
*/

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;


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