<?php
/* Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur. */

// Création du tableau

$tableau = array ();

// Acrémentation du tableau
for ($i=0; $i <= 8; $i++) {
    $tableau [$i] = readline ("Entrez un nombre : ");
}

// Lecture du tableau
for ($i=0; $i <= 8; $i++) {
    echo $tableau [$i];
    echo "\n";
}
?>