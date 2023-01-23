<?php

/* Exercice 20 

Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre 5, le programme doit calculer : 1 + 2 + 3 + 4 + 5 = 15

*/

// on demande à l'utilisateur de saisir un nombre

$nb = readline('Saisissez un nombre : '); 
$som = 0;

// On calcule la somme de toutes les valeurs allant de 0 jusqu'au nombre saisi.

for ($i=1; $i <= $nb; $i++) {
    $som = $som + $i;
    echo $i; 

        if ($i != $nb) { 
            echo ' + ';
        } else {
            echo ' = ';
        }
}

// On affiche la somme de tous les entiers jusqu'au nombre saisi. 

    echo $som;



 