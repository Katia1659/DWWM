<?php
//exucter : php -f fichier.php
//Quelles seront les valeurs des variables A et B aprés exécution des instruction suivantes 

// $a = 1;            a = 1    b = ?
// $b = $a + 3;       a = 1    b = 4
// $a = $b;           a = 4    b = 4 

// echo 'debut';
// echo "/n";
// echo $a.$b;
// echo "/n";
// echo 'fin';


//inisilisation des var
$a = 1;
$b = $a + 3;
$a = $b;

echo 'debut';
echo "\n";
echo $a;
echo $b;
echo "\n";
echo 'fin';

?>