<?php

/* Exercice 31 

Ecrire un algorithme qui déclare et remplisse un tableau contenant les six voyelles de l'alphabet latin. 

*/

// On déclare un tableau avec les six lettres de l'alphabet latin

$tab = array ('A', 'E', 'I', 'O', 'U', 'Y');

// On affiche les valeurs du tableau créé précédemment

for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i];
    echo "\n";
}