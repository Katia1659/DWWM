<?php

/*
Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. 
Le programme, une fois la saisie terminée , renvoie la plus grande valeur en precisant quelle position elle occupe dans le tableau.
on prendra soin d'effectuer la saisie dans un premier temps et la recherche de la plus grande valeurs du tableau dans un second temps.

*/

// initialisations des variables
$pos = 0;
$pg = 0;
$nb = readline("donnez une valeur");
$tab = array();

//demande a l'utilisateur d'entrer des valeurs
for ($i=0; $i <= $nb - 1 ; $i++) { 
   $tab[$i] = readline("entrez une valeur : ");
}


//recherche de la plus grande valeurs et on affichera sa position 
for ($i=0; $i <= $nb - 1; $i++) { 
   
    if ($tab[$i] > $pg) {
        $pg = $tab[$i];
        $pos = $i + 1;

    }

}

echo "la position de la valeur la plus grande est : ".$pos;

?>