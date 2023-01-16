<?php
/* On dispose de trois variables A,B et C. Ecrivez un algorithme transférant à B  la valeur de A, à C la valeur de B et à A la valeur de C
A = 1
B = 2
C = 3

a = c
b = a
c = b 

temp = c 
c = b 
b = a 
a = temp
 
*/

$a = 1;
$b = 2;
$c = 3;
$temp = $c; 
$c = $b; 
$b = $a; 
$a = $temp;

echo 'debut';
echo PHP_EOL;
echo '$a = '. $a;

echo PHP_EOL;
echo '$b = '. $b;
echo PHP_EOL;

echo '$c = '. $c;
echo PHP_EOL;
echo 'fin';
?>


