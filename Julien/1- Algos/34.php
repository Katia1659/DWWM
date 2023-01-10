<?php
/* Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur. */

// Création du tableau
$tableau = array (1, 5, 6, 15, 25, 40);

$somme = 0;

    for ($i = 0; $i <= 5; $i++) {
        echo "$somme + $tableau[$i]";
        echo "\n";
// Incrémentation de la variable $somme pour faire un addition valeur par valeur
        $somme += $tableau[$i];
}

    echo "La somme des valeurs du tableau est de : $somme" ;
    
?>