<?php
/* 
Ecrire un algorithme saisissant 2 variables entières qui calcule et affiche leur moyenne.

Lire nbr1
Lire nbr2

nbr1 = (nbr1 + nbr2) /2 

afficher nbr1
*/

// initialisation des variables
echo 'Début';
echo PHP_EOL;
$nbr1 = readline("Choisir un nombre ");
$nbr2 = readline("Choisir un nombre ");
echo PHP_EOL;

//calcul
$nbr1 = ($nbr1 + $nbr2) / 2;

//affichage des résultats 
echo 'La moyenne de vos deux nombres est : '. $nbr1 . PHP_EOL;

echo 'Fin';
