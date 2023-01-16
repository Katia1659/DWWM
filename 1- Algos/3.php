<?php
/* Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
A = 5
B = 5 + 4 
B = 9 
A = 5 + 1 
A = 6
B = 6 - 4

*/

$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;
echo 'fin';

?>