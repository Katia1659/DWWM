<?php
/* Quelles seront les valeurs des variables A,B et C après exécution des instructions suivantes ?
A = 5
B = 3 
C = 5 + 3 
C = 8
A = 2
C = 3 - 2
C = 1

a = 2
b = 3
c = 1
*/

$a = 5;
$b = 3;
$c = $a + $b;
$a = 2;
$c = $b - $a; 

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;

echo '$c = '. $c;
echo PHP_EOL;
echo 'fin';

?>