<?php

/*Quelles seront les valeurs des variables a et b après exécution des instructions suivantes?
Var a, b :entier
début
a = 5       /a=5
b = 2       /a=5 b=2
a = b       /a=2 b=2
b = a       /a=2 b=2
fin
*/

$a = 5 ;
$b = 2 ;
$a = $b ;
$b = $a ;

echo 'début';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo 'fin';
?>