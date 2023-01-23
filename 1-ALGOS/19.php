<?php

/* Exercice 19 

Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27 

*/

// On demande un nombre à l'utilisateur.

$nb = readline('Saisissez un nombre : ');

// On affiche les 10 nombres qui suivent le nombre saisi au départ. 

for ($i= 1; $i <= 10; $i++) {
    echo $nb + $i;
    echo ' ';
}

