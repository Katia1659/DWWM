<?php
/* Quelles seront les valeurs des variables A et B apres l'execution des instructions suivantes?
Var A, B = Entier;
Debut
    a <- 5      a=5     b=?
    b <- a+4    a=5     b=9
    a <- a+1    a=6     b=9
    b <- a-4    a=6     b=2
Fin
*/

$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;

echo 'Debut';
echo PHP_EOL;
echo $a;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo 'Fin'

?>