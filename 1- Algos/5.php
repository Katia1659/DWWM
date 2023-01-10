<?php
/* Quelles seront les valeurs des variables A et B aprés exécution des instructions suivantes

a = 5      a = 5   b = ?  
b = 2      a = 5   b = 2   
a = b      a = 2   b = 2
b = a      a = 2   b = 2

$a = 5;
$b = 2;
$a = $b;
$b = $a;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'fin';

*/

//inisilisation des var
$a = 5;
$b = 2;
$a = $b;
$b = $a;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'fin';


?>