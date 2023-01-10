<?php
/* 
Toujours et encore sur la même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe. 
*/

echo 'Début';
// création des tableaux
$tab = array();
$somme = 0;
$moyenne = 0;
$compte = 0;
echo PHP_EOL;
// initialisation des variables manuelle
$taille = readline('Combien de note ? ');
echo PHP_EOL;



for ($i = 0; $i <= $taille - 1; $i++) {

    $tab[$i] = readline("Quelle note ? ");
    $somme = $somme + $tab[$i];
    $moyenne = $somme / $taille;
}

// recherche de la plus grande valeur 

for ($i = 0; $i <= $taille - 1; $i++) {
    if ($tab[$i] >= $moyenne) {
        $compte = $compte + 1;
    }
}

//affichage du tableau et de la valeur 

for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}
echo PHP_EOL;
echo 'Le nombre de note au dessus de la moyenne : ' . $compte;
echo PHP_EOL;
