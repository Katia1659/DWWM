<?php
/* 
Ecrire un algorithme qui demande un nombre, calcule et affiche la somme 

Lire nbr 

pour i de 1 à nbr 

boucle = IX3
compte = compte + boucle

*/

echo 'Début';
// initialisation des variables 
$boucle = 0;
$total = 0;
echo PHP_EOL;
$nbr = readline('choisir un nombre ');


// Calculs dans une boucle 
for ($i = 1; $i <= $nbr; $i++) {
    $boucle = $i * $i * $i;
    $total = $total + $boucle;
}

// affichage des résultats
echo 'Le total est : ' . $total . PHP_EOL;
echo 'Fin';
