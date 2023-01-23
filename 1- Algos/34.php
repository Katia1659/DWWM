<?php
/* 
Ecrivez un algorithme calculant la somme des valeurs d'un tableau ( on suppose que le tableau a été préalablement saisi )


création tableau
boucle pour 
$tab 1 s'ajour a une variable 
 */


echo 'Début';

// initialisation des variables 
$somme;
echo PHP_EOL;
$tab = array();
$tab[0] = 15;
$tab[1] = 15;
$tab[2] = 15;
$tab[3] = 15;
$tab[4] = 15;
$tab[5] = 15;
// Calculs dans une boucle

for ($i = 0; $i <= 5; $i++) {
    $somme = $somme + $tab[$i];
}

// affichage des résultats
for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . " ";
}
echo PHP_EOL;
echo 'La somme est : ' . $somme . PHP_EOL;
echo 'Fin';
