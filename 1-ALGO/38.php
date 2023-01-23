<?php
/*Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois
la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra le soin d'effectuer la saisie
dans un premier temps, et la recherche de la plus grand valeur du tableau dans un second temps.*/

// Création tableau et variables
$tab = array();
$pgIndex = 0;

// 1ere entrée du tab pour que le maximum sois compté si tout les nombres du tab sont négatifs
$tab[0] = readline ("Entrez une valeur : ");
$pg = $tab[0];

// Boucle pour remplir le tab
for ($i=1; $i <= 5; $i++) {
    $tab[$i] = readline ("Entrez une valeur : ");
}

// Boucle pour trouver la plus grande valeur et la position dans le tab
for ($i=0; $i < count($tab); $i++) {
    if ($pg < $tab [$i]) {
        $pg = $tab [$i];
        $pgIndex = $i;
        }
    }
    
    echo "La plus grande valeur saisie est de $pg à la case $pgIndex du tableau"
?>
