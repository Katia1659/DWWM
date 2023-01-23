<?php
/* Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
Var a, b : Entier 
    début 
        a = 5; 
        b = 2; 
        a = b; 
        b = a; 
    fin 

$a = 5; 
$b = 2; 
$a = $b;
$b = $a;

echo $a; 
echo "\n"; 

echo $b; 
echo "\n";
*/

$a = 5; 
$b = 2; 
$a = $b;
$b = $a;

echo $a; 
echo "\n"; 

echo $b; 
echo "\n";

?>