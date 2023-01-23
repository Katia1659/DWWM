<?php

/* Exercice 38 

Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps. 

*/

// On demande à l'utilisateur le nombre de valeurs qu'il souhaite incorporer au tableau. On initialise la variable position faisant référence à l'indice du tableau à 1. 

$nbValeurs = readline ('Saisissez le nombre de valeurs que vous souhaitez saisir : ');
$position = 1;


// On demande à l'utilisateur d'insérer les valeurs du tableau, on admet que le plus grand (pg) prend la valeur du premier entier saisi.
// Si le nombre saisi est plus grand que la variable pg, pg prend la valeur du nombre saisi. Ainsi la position prend la valeur de i dans ce cas. 


$tab[0] = readline ('Saisir les valeurs du tableau : ');
$pg = $tab[0];
for ($i = 1; $i < $nbValeurs ; $i++) {
    $tab[$i] = readline('Saisir les valeurs du tableau : ');

    if ($tab[$i] > $pg) {
        $pg = $tab[$i];
        $position = $i + 1; 
    }
}

// On affiche la plus grande valeur, et également sa position dans le tableau. 

echo "La plus grande valeur du tableau est"." ".$pg. "\n";
echo "Sa position dans le tableau est ";
echo $position; 

