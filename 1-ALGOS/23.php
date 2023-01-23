<?php

/* Exercice 23 

Réécrire l'algorithme précédent, mais cette fois-ci on ne connaît pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.

*/

// On initialise les différentes variables

$nb = 1;
$position = 1;
$pg = -100;
$i = 0;

// Tant que l'utilisateur saisi une valeur différente de 0, on lui demande de saisir des valeurs. 
// Ensuite on détermine la plus grande valeur parmi les entiers saisis, ainsi que sa position. 

while ($nb != 0 ) {
$nb = readline ('Saisissez un nombre : '); 
$i++;
    if ($nb > $pg) {
        $pg = $nb;
        $position = $i;
    }
}

// Toujours le même principe on affiche le plus grand ainsi que sa position. 

echo 'Le nombre le plus grand est ';
echo $pg; 
echo "\n";
echo 'Ce nombre a été saisi en ';
echo $position;