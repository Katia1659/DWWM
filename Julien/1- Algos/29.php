<?php
/* Ecrire un algorithme qui demande un nombre, calcule et affiche la somme */

//Accredite les variables
$n = readline ("Entrez un nombre");
$i = 1;
$somme = 0;

while  ($i <= $n) {
    //                    $i au cube ↓
    $somme = $somme + ($n * ($i * $i * $i));
    $i ++;
}
echo "La somme est de : $somme";
?>