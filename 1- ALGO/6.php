<?php
/*Ecrire un algorithme permettant d'échanger les valeurs de
variables A et B.


Pour ce faire on va crée une valeur dite "tampon" :

a = 1
b = 2
tempo = a
a = b
b = tempo
*/

$a = 1;
$b = 2;
$tempo = $a;
$a = $b;
$b = $tempo;


echo 'Début';
echo"\n";
echo 'a = ',$a;
echo"\n";
echo 'b = ',$b;
echo"\n";
echo 'Fin';
?>