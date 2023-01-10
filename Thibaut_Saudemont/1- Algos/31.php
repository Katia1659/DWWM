<?php
/* 
Ecrire un algorithme qui déclare et rempli un tableau contenant les six voyelles de l'alphabet latin.


 */
// initialisation des variables 
echo 'Début';
echo PHP_EOL;
$tab = array();
$tab[0] = 'A';
$tab[1] = 'E';
$tab[2] = 'Y';
$tab[3] = 'U';
$tab[4] = 'I';
$tab[5] = 'O';

// affichage des résultats
for ($i=0; $i < sizeof($tab) ; $i++) { 
    echo $tab[$i]. " ";
}

echo PHP_EOL;
echo 'Fin';
