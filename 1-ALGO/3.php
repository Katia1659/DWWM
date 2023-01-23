<?php

/* Quelles seront les valeurs des variables a et b après exécution des instructions suivantes?
var a, b :entier
début
a = 5           /a=5
b = a + 4       /a=5 b=9
a = a + 1       /a=6 b=9
b = a - 4       /a=6 b=2
*/

$a = 5 ;
$b = $a + 4 ;
$a = $a + 1 ;
$b = $a - 4 ;

echo 'début';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo 'fin';
?>