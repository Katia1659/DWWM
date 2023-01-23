<?php
/*
Ecrivez un algorithme permettant, toujours sur le même principe, à
l'utilisateur de saisir un nombre déterminé de valeurs. Le
programme, une fois la saisie terminée, renvoie la plus grande
valeur en précisant quelle position elle occupe dans le tableau. On
prendra soin d'effectuer la saisie dans un premier temps, et la
recherche de la plus grande valeur du tableau dans un second
temps.
*/


//creation du tableau
$tabs = array();
//inisilisation de la var
$taille = readline('entrez la taille de votre tableau');
$nbGrand = 0;
$position = 0;
$nb = 0;
//creation des boucles for
for ($i=0; $i < $taille ; $i++) { 
    $nb = readline('Entrez une valeurs ');
    $tabs[$i] = $nb;
        if ($tabs[$i] > $nbGrand) {
            $nbGrand = $tabs[$i];
            $position = $i;

        }
}
for ($i=0; $i < $taille; $i++) { 
    echo $tabs[$i];
    echo '|';
}

echo "\n";
echo 'La valeurs la plus grande et '.$nbGrand;
echo "\n";
$position++;
echo 'et la position de ce dernier et '.$position;
?>