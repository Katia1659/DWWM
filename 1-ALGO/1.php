<?php
/* Quelles seront les valeurs des variables A et B aprés exé cution des instructions suivantes?
Var A, B : Entier 
Début 
 a=1   b=?
 a=1   b=4
 a3     b=4
fin
 
*/

// Déclaration de variable:

$a = 1;
$b = $a + 3;
$a = 3;

// Affichege :

echo 'Début';
echo PHP_EOL;
echo "a= ", $a;
echo PHP_EOL;
echo "b= ", $b;
echo PHP_EOL;
echo 'Fin';


?>