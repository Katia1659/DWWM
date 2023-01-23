<?php
/* 
Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.
Debut
fact = 1
pour i allant de 1 a Nb
fact=fact x i
ecrire fact
fin
*/
$fact = 1;
$nb = readline('entrez un nombre : ');
for ($i = 1; $i <= $nb ; $i++) { 
    $fact = $fact * $i;
}
echo $fact;
?>