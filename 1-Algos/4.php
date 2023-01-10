<?php

/*Quelles seront les valeurs des variables a, b et c après exécution des instructions suivantes?
Var a, b, c :Entier;
début
a = 3           /a=3
b = 10          /a=3 b=10
c = a + b       /a=3 b=10 c=13
b = a + b       /a=3 b=13 c=13
a = c           /a=13 b=13 c=13
fin
*/

$a = 3 ;
$b = 10 ;
$c = $a + $b ;
$b = $a + $b ;
$a = $c ;

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