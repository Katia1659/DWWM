<?php

/* 

Exercice 34 

Ecrivez un algorithme calculant la somme des valeurs d'un tableau (on suppose que le tableau a été préalablement saisi).

*/

// On initialise la variable somme, et un tableau de 5 valeurs en l'occurrence. 
$som = 0;
$tab = array('1', '6', '3', '4', '7');

// On crée une boucle qui va additionner à chaque tour de boucle les différentes valeurs du tableau. 

for ($i = 0; $i < count($tab); $i++) {
    $som = $som + $tab[$i];
}

echo $som;

