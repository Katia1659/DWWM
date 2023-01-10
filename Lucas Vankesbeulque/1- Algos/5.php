<?php
/* Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
A = 5
B = 2
A = 2
B = 2
*/

$a = 5;
$b = 2;
$a = $b;
$b = $a;

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;
echo 'fin';

?>