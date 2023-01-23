<?php

/* 

Exercice 32 

Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur. 

*/

// On crée un tableau, sans valeurs. 
$tab = array();

// On demande à l'utilisateur de remplir ce tableau de 9 notes
for ($i = 0; $i < 9; $i++) {
    $tab[$i] = readline('Saisir la note ');  
}

// On affiche les 9 notes du tableau
for ($i = 0; $i < 9; $i++) {
    echo $tab[$i];
    echo "\n";
}



