<?php
/*Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur

*/

//declaration du tableau
$tableau = array();

// boucle pour creer le tableau et demander a l'utilisateur de saisir des valeurs "
for ($i=0; $i <=8 ; $i++) { 
    $tableau[$i]= readline ('Veuillez entrer un nombre  :'); 
}
for ($i=0; $i <=8 ; $i++) { 
    echo $tableau[$i];
    echo PHP_EOL;
}









