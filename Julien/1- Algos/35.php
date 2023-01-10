<?php
/* Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur. */

// Création des deux premier tableaux et incrémentation
$tableau1 = array (4, 8, 7, 9, 1, 5, 4, 6);
$tableau2 = array (7, 6, 5, 2, 1, 3, 7, 4);

// Création du troisième tableau
$tableau3 = array ();

// Incrémentation du 3ième tableau
for ($i =0; $i<=7; $i++) {

    $tableau3[$i] = $tableau1[$i] + $tableau2[$i];
}

//Lecture du 3ième tableau
for ($i =0; $i<=7; $i++) {
    echo $tableau3[$i];
    echo "\n";
}