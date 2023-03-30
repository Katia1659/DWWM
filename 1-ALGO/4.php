<?php
/* Quelles serot les valeurs des variables a, b , c après exécution des instrucions suivantes ? 
Var a, b , c : Entier 
    début 
        a = 3;
        b = 10;
        c = a + b;
        b = a + b;
        a = c; 
    fin 

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo $a; 
echo "\n";

echo $b;
echo "\n";

echo $c; 
echo "\n";

*/


$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo $a; 
echo "\n";

echo $b;
echo "\n";

echo $c; 
echo "\n";
?>