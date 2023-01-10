<?php
/* Quelles seront les valeurs des variables A et B apres execution des instruction suivantes ? 
Var A, B = Entier;
Debut
    a <- 5              a=5     b=?
    b <- 2              a=5     b=2
    a <- b              a=2     b=2
    b <- a              a=2     b=2
Fin
*/

$a = 5;
$b = 2;
$a = $b;
$b = $a;

echo 'Debut';
echo PHP_EOL;
echo $a;
echo PHP_EOL;
echo $b ;
echo PHP_EOL;
echo 'Fin'
?>