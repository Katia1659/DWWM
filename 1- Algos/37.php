<?php
/*Ecrivez un algorithme qui permette la saisie d'une nombre quelconque de valeurs. Toutes les valeurs doivent etre ensuite augmentées de 1 et le nouveau tableau sera affiché à l'écran

*/

//initialisation des tableaux
$tab = array();
$tab2 = array();

//je demande a l'utilisateur de la taille du tableau 
$n= readline('Veuillez entrer un nombre de valeur a saisir  :');
for ($i=1; $i <=$n ; $i++) { 


    $valeur= readline ('Veuillez entrer un nombre  :'); 
    $tab[$i]=$valeur;
}
for ($i=1; $i <=$n ; $i++) { 
    $tab2[$i]=$tab[$i]+1;
    echo $tab2[$i];
    echo PHP_EOL;
}




