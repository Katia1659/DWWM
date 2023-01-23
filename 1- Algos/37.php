<?php
/* 
Ecrivez un algorithme sui permet la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuite augmentées de 1 et le nouveau tableau sera affiché à l'écran.
*/

echo 'Début';
// création des tableaux
$tab = array();
echo PHP_EOL;
// initialisation des variables manuelle
$taille = readline('Combien de valeur voulez vous ajouter ? ');
echo PHP_EOL;

for ($i = 0; $i <= $taille - 1; $i++) {
    $tab[$i] = readline("Un nombre ? ");
    $tab[$i] = $tab[$i] + 1;
}

//affichage du tableau

for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}


echo 'Fin';
