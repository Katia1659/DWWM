<?php
/*
Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. Le
programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On
prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.
*/

// declaration des variables
$vMax = 0;
$posVMax = 0;

// on defini la taille du tableau
$nbValeurs = readline("Entrez le nombre de valeurs : ");
$tab = array ($nbValeurs);

// on rentre les notes 
for ($i=0; $i < $nbValeurs ; $i++) { 
    $tab[$i] = readline("Entrez la note : ");
}

// on recherche la plus grande valeur et sa position
for ($i=0; $i < $nbValeurs ; $i++) { 
    if ($tab[$i] > $vMax) {
        $vMax = $tab[$i];
        $posVMax = $i + 1;
    }
}

// on affiche la valeur max et sa position
echo "la valeur max est : $vMax en position $posVMax .";


?>