<?php
/* on dispose de trois variable A,B et C.
ecrivez un algorithme transférant 
à B la valeur de A, 
à C la valeur de B 
et à A la valeur de C.
----------------------
Var  a,b,c,t : Entier 

Début 
t=a
a=c
c=b
b=t
 
fin
 
*/
// Déclaration de variable
$a = 2;
$b = 3;
$c = 5;

// permutation :
$t=$a;
$a=$c;
$c=$b;
$b=$t;

// Affichage :

echo 'Début';
echo PHP_EOL;
echo "a= ", $a;
echo PHP_EOL;
echo "b= ", $b;
echo PHP_EOL;
echo "c= ", $c;
echo PHP_EOL;
echo 'Fin';


?>