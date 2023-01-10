<?php
/* Quelles seront les valeurs des variables A,B et C après exécution des instructions suivantes ?
A = 3
B = 10
C = 3 + 10
C = 13
B = 3 + 10
B = 13
A = 13
*/

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;

echo $c;
echo PHP_EOL;
echo 'fin';

?>
