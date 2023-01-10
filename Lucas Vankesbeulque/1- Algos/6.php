<?php
/* Ecrire un algorithme permettant d'échanger les valeurs de deux variables A et B
A = 1
B = 2
C = A 
D = B
A = D
B = C
*/

$a = 1;
$b = 2;
$c = $a;
$d = $b;
$a = $d;
$b = $c;

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;
echo 'fin';
?>
