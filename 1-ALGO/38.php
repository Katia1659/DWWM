<?php
/* 
Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. 
Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position qu'elle occupe dans le tableau. 
On prendra soin d'effectuer la saisie dans un premier temps et la recherche de la plus grande valeur dans un second temps. 
*/


echo 'Début';
// création des tableaux
$tab = array();

echo PHP_EOL;
// initialisation des variables manuelle
$taille = readline('Combien de valeur voulez vous ajouter ? ');
echo PHP_EOL;

$tab[0] = readline("Un nombre ? ");
$pgValeur = $tab[0];
for ($i = 1; $i <= $taille - 1; $i++) {

    $tab[$i] = readline("Un nombre ? ");
}

// recherche de la plus grande valeur 

for ($i = 0; $i <= $taille - 1; $i++) {
    if ($tab[$i] > $pgValeur) {
        $pgValeur = $tab[$i];
    }
}

//affichage du tableau et de la valeur 

for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}
echo PHP_EOL;
echo 'La plus grande valeur est ' . $pgValeur;
echo PHP_EOL;
