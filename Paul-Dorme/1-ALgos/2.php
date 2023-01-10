<?php
/* Quelles seront les valeurs ds variables A, B et C après exécution des instructions suivantes ?
var A,B,C:Entier

A = 5
B = 3
C = 8
A = 2
C = 1
 */

$a = 5;
$b = 3;
$c = $a + $b;
$a = 2;
$c = $b - $a;

echo 'A = '.$a ."\n";
echo 'B = '.$b ."\n";
echo 'C = '.$c;

?>

