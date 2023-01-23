<?php 
/* Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?
$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c; */

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

?>