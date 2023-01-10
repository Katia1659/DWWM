<?php
/* 
Ecrir un algorithme qui demande un nombre de départ et qui ensuite affiche les dix nombres suivants. par exmple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.

Ecrire Choisir un nombre 
Lire nbr 

pour i allant de 1 à 10 {
nbr = nbr + 1
i = i + 1 
a}
*/


echo 'Début';
echo PHP_EOL;

// initialisation des variables
$nbr = readline("Choisir un nombre ");

// affichage des 10 nombres suivant la sélection précédente 
for ($i = 0; $i < 10; $i++) {
    $nbr++;
    echo  $nbr;
    echo ' ';
}

echo PHP_EOL;
echo 'Fin';
