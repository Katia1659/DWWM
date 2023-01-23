<?php
/* ecrire un algorithme permettant d'échanger les valeurs de deux variable A et B.
Var A, B, C : Entier 

Début 
 a=5
 b=2
 c=a
 a=b
 b=c
fin
 
*/

// Déclaration de variable
$a = 5;
$b = 2;
$c = $a;
$a=$b;
$b=$c;

// Affichage :
echo 'Début';
echo PHP_EOL;
echo "a= ", $a;
echo PHP_EOL;
echo "b= ", $b;
echo PHP_EOL;
echo 'Fin';


?>