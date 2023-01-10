<?php
/*Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle. 
*/
$i = 1;
$factorielle = 1;

for ( $nb = readline ("Entrez un nombre : "); $i <= $nb; $i ++) {
    $factorielle = $factorielle * $i;
}

echo "la factorielle de $nb est égale à $factorielle";
?>