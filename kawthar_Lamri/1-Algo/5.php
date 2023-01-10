<?php
/* Quelles seront les valeurs des variables A et B aprés exé cution des instructions suivantes?
Var A, B : Entier 
Début 
 a=5   b=?
 a=5   b=2
 a=2   b=2
 a=2   b=2
fin
 
*/
// Déclaration de variable
$a = 5;
$b = 2;
$a = $b;
$b=$a;
// Affichage :
echo 'Début';
echo PHP_EOL;
echo "a= ", $a;
echo PHP_EOL;
echo "b= ", $b;
echo PHP_EOL;
echo 'Fin';






?>