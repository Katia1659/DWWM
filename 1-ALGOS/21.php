<?php

/* Exercice 21 

Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle. 

*/

// On demande à l'utilisateur de saisir un nombre. On admet que la factorielle est de 1 au départ. 

$nb = readline('Saisissez un nombre : ');
$factorielle = 1;

// On crée une boucle afin d'expliquer le calcul qui aboutit au résultat de la factorielle d'un nombre. 

for ($i=1; $i <= $nb; $i++) {
    $factorielle = $factorielle * $i;
}

// On affiche la factorielle du nombre saisi. 

echo 'La factorielle de ' ;
echo $nb;
echo ' est ';
echo $factorielle; 
