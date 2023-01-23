<?php
/* quelles  seront les valeurs des variables A et B aprés exécution des intructions suivantes 

a = 12         a  = 12  b = ?  temp = ?
b = 6          a  = 12  b = 6 temp = ?
temp = a       a  = 12  b = 6  temp = 12
a = b          a  = 6  b = 6  temp = 12
b = temp       a  = 6  b = 12  temp = 12


*/

//inisilisation des var
$a = 12;
$b = 6;
$temp = $a;
$a = $b;
$b = $temp;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'fin';



?>