<?php
/*
On dispose de trois variables A,B et c. Ecrivez un algorithme transeférant a B la valeurs de A, a C la valeurs de B et a A la valeurs de C.

a = 12      a = 12  b = ?  c = ?  temp = ?
b = 13      a = 12  b = 13 c = ?  temp = ?
c = 10      a = 12  b = 13 c = 10 temp = ?
temp = b    a = 12  b = 13 c = 10 temp = 13
b = a       a = 12  b = 12 c = 10 temp = 13
c = temp    a = 12  b = 13 c = 13 temp = 13
a = c       a = 13  b = 13 c = 13 temp = 13

$a = 12;
$b = 13;
$c = 10;
$temp = b;
$b = a;
$a = c;
$c = $temp;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'fin';

*/

//inisilisation des var
$a = 12;
$b = 13;
$c = 10;
$temp = $b;
$b = $a;
$a = $c;
$c = $temp;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'fin';

?>