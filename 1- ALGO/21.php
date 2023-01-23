<?php
/*Ecrire un algorithme qui demande un nombre de départ, et qui
calcule sa factorielle.

Dans un premier temps on demande un nombre n à l'utilisateur,
puis on calcule sa factorielle et la renvoie.
*/


$n = readline('Donnez un nombre : ');
$fact = 1;
for ($i = 1; $i < $n + 1; $i++) { 
    $fact = $fact*$i;    
}
echo $fact;

?>