<?php
/* Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
A = 1
B = 1 + 3 
A = 3
*/

$a = 1;
$b = $a + 3;
$a = 3;

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;
echo 'fin';

?>