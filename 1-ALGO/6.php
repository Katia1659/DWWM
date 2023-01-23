<?php 
// Ecrire un algorithme permettant d'échanger les valeurs de variables A et B
// Variable A,B, tempo Entier

// A <- 12
// B <- 6
// temp <- A
// A <- B
// B <- temp

$a = 12;
$b = 6;
$temp = $a;
$a = $b;
$b = $temp;

echo 'A = '.$a."\n";
echo 'B = '.$b;

?>