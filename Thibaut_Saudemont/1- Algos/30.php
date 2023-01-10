<?php
/* 
Donnez le résultat de la multiplication de deux nombres en ne faisant que des additions 

donner chiffre 
donner chiffre

boucle for de 1 a nbr1
additionner les nbr2
 */

echo 'Début';
echo PHP_EOL;

// initialisation des variables 
$reponse = 0;
$nbr1 = readline('choisir un nombre ');
$nbr2 = readline('choisir un nombre ');

// Calculs dans une boucle
for ($i = 1; $i <= $nbr1; $i++) {

    $reponse = $reponse + $nbr2;
}

// affichage des résultats
echo PHP_EOL . $reponse . PHP_EOL;
echo 'Fin';
