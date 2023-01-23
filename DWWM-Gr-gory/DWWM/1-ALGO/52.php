<?php
/* Ecrire un ombre algorithme d'entiers qui calcule le nombre d'entier pairs et le nombre d'entiers impairs d'un tableau d'entiers. */

// on declare notre tableau et initialise nos variable
$cp = 0;
$ci = 0;
$tab = array(14,4,8,44,12,258,3,45,9,2,5);

// on va parcourir le tableau et chercher les valeurs divisible par 2
for ($i=0; $i < sizeof($tab) ; $i++) { 

    // si la valeur est divisible par 2 cp(compteur pair)prend +1
    if ($tab[$i]%2 == 0) {
        $cp++;
    }
    // si la valeur n est pas divisible par 2 ci(compteur impair)prend +1
    if ($tab[$i]%2 != 0) {
        $ci++;
    }
}

//on affiche les resultats
echo "Le tableau contient $cp chiffres pairs et $ci chiffres impairs"

?> 
