<?php 
/*On dispose de trois variables A, B et C. Ecrivez un algorithme tranférant à B la valeur de A, à C la valeur de B et à A la valeur de C
Var A,B,C, tempo Entier

A <- 5
B <- 10
C <- 12

B <- A
tempo <- B
C <- tempo
A <- C
*/

$a = 5;
$b = 10;
$c = 12;
$tempo = 0;

$tempo= $b;
$b = $a;
$a = $c;
$c = $tempo;


echo 'A = '.$a."\n";
echo 'B = '.$b."\n";
echo 'C = '.$c;


?>