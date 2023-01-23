<?php
/*Quelles seront les valeurs des variables A, B et C aprés exécution des instructions suivantes?
Var A,B,C : Entier

Début
a=5       b=? 
a=5       b=5+4=9
a=5+1=6   b=3  
a=6       b=6-4=2 
fin
*/
// Declaration de variable
$a=5;
$b=$a+4;
$a=$a+1;
$b=$a-4;

// Affichage :
echo 'Début';
echo PHP_EOL;
echo "a= ", $a;
echo PHP_EOL;
echo "b= ", $b;
echo PHP_EOL;
echo 'Fin';

?>