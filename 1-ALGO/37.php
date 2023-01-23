<?php
/*
• Ecrivez un algorithme qui permette la saisie d'un nombre
quelconque de valeurs. Toutes les valeurs doivent être ensuite
augmentées d 1 et le nouveau tableau sera affiché à l'écran.
*/

//creation du tableau
$tabs = array();
//inisilisation de la var
$taille = readline('entrez la taille de votre tableau');
//creation des boucles for
for ($i=0; $i < $taille ; $i++) { 
    $tabs[$i] = readline('Entrez une valeurs ');
    $tabs[$i] = $tabs[$i]+1;
}
for ($i=0; $i < $taille; $i++) { 
    echo $tabs[$i];
    echo '|';

}
