<?php

/*Quelles seront les valeurs des variables A et B après exécution des instructions suivantes?

Vae a,b: entier
début
a = 1           / a=1 b=
b = a + 3       / a=1 b=4
a = 3           / a=3 b=4
fin
*/

$a = 1 ;
$b = $a + 3 ;
$a = 3 ;

echo 'début';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo 'fin';
?>