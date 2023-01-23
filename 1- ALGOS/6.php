<?php

/*
Ecrire un algorihme permettant d'échanger les valeurs de deux variable A et B.
A <- 5 
B <- 7   
C <- A
A <- B
B <- C

A <- 5     B <- ?     C <- ?
A <- 5     B <- 7     C <- ?
A <- 5     B <- 7     C <- A = 5 
A <- B = 7 B <- 7     C <- 5
A <- 7     B <- C = 5 C <- 5
*/

// affecter les valeurs aux variables et permet d'echanger les valeurs

$a = 5;
$b = 7;
$c = $a;
$a = $b;
$b = $c;

// afficher les valeurs

echo "Debut";
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo "Fin";

?>

