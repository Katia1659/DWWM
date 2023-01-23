<?php
/*Quelles seront les valeurs des variables A, B et C aprés exécution des instructions suivantes?
Var A,B,C : Entier

Début
a=3   b=?      c=?
a=3   b=10     c=?
a=3   b=10     c=3+10=13
a=3   b=3+10   c=13
a=13   b=13    c=13
fin
*/


// Déclaration de variable
$a=3;
$b=10;
$c=$a+$b;
$b=$a+$b;
$a=$c;

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