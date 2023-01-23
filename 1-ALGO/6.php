<?php

/* Ecrire un algorithme permettant d'échanger les valeurs de deux variables a et b.
début
a = 5       /a=5
b = 2       /a=5 b=2
c = b       /a=5 b=2 c=2
b = a       /a=5 b=5 c=2
a = c       /a=2 b=5 c=2
fin
*/

$a = 5 ;
$b = 2 ;
$c = $b ;
$b = $a ;
$a = $c ;

echo 'début';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo 'fin';
?>