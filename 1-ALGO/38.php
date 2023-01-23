<?php
/* Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs.
Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau.
On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.
*/

$nb = readline('indiquer le nombre de valeurs dans le tableau: ');
$tab = [];

//on rentre les valeurs du tableau
for ($i=0; $i < $nb; $i++) { 
    $tab [$i] = readline('entrer la valeur à l index ' . $i . ': ') ;
}

//On crée une plus grande valeur provisoire
$max = $tab[0];

//On cherche la plus grande valeur
for ($i=1; $i < $nb; $i++) { 
    if ($tab[$i] > $max) {
        $max = $tab[$i] ;
    }
}

echo "la plus grande valeur est " . $max ;
?>