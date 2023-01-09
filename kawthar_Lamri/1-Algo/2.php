<?php
/*Quelles seront les valeurs des variables A, B et C aprés exécution des instructions suivantes?
Var A,B,C : Entier

Début
a=5   b=?  c=?
a=5   b=3  c=?
a=5   b=3  c=3+5=8
a=2   b=3  c=8
a=2   b=3  c=3-2=1
Fin

*/

// Declaration de variable
$a=5;
$b=3;
$c=$a+$b;
$a=2;
$c=$b-$a;

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