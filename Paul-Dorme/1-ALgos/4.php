<?php
// Quelles seront les valeurs des variables A, B et C zprès exécution des instructions suivantes ?
// Var A, B , C : Entier

// A = 3
// B = 10
// C = 13
// B = 13
// C = 13

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo 'A = '.$a."\n";
echo 'B = '.$b."\n";
echo 'C = '.$c;
?>