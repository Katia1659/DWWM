<?php

/* Quelles seront les valeurs des variables a, b et c après exécution des instructions suivantes?
Var a, b, c :Entier;
début
a = 5           /a=5 
b = 3           /a=5 b=3 
c = a + b       /a=5 b=3 c=8
a = 2           /a=2 b=3 c=8
c = b - a       /a=2 b=3 c=1
fin
*/

$a = 5 ;
$b = 3 ;
$c = $a + $b ;
$a = 2 ;
$c = $b - $a ;

echo 'début';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo 'fin';
?>