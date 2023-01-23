<?php
/*Quelles seront les valeurs des variables A et B après exécution
des instructions suivantes ?
Var A, B : Entier

a = 5
b = 2
a = b
b = a
*/

$a = 5;
$b = 2;
$a = $b;
$b = $a;


echo 'Début';
echo"\n";
echo 'a = ',$a;
echo"\n";
echo 'b = ',$b;
echo"\n";
echo 'Fin';

?>