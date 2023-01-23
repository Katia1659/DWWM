<?php

/* Exercice 25 

Ecrire un algorithme saisissant 2 variables entières qui calcule et affiche leur moyenne. 

*/


/*
$tab = array('2', '3');
for ($i = 0 ; $i < count($tab) ; $i++) {
$moyenne = $tab[i] / count($tab)
}
*/

// Initialisation des variables
$nb1 = readline ('Saisissez un nombre : ');
$nb2 = readline ('Saisssez un second nombre : ');

// Pour faire la moyenne on additionne les valeurs saisies, et on les divise par le nombre de valeurs, en l'occurrence 2
$moyenne =( $nb1 + $nb2 ) / 2;

// Affichage de la moyenne 
echo 'La moyenne des nombres saisis est ';
echo $moyenne;

