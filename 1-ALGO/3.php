<?php /* Quelle seront les valeurs de variables A et B après exécution des instructions suivantes ?
Var A, B : Entier 

A = 5
B = 9
A = 6
B = 2

*/

$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;

echo 'A = '.$a."\n";
echo 'B = '.$b;

?>