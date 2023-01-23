<?php
/* Quelles seront les valeurs des variables A et B apres execution des instruction suivantes ? 
Var A, B = Entier;
Debut
    a <- 1              a=1     b=?
    b <- a + 3          a=1     b=4
    a <- 3              a=3     b=4   
Fin
*/

$a = 1;
$b = $a + 3;
$a = 3;

echo $a;
echo PHP_EOL;
echo $b ;
echo PHP_EOL;
echo 'Fin'
?>