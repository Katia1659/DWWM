<?php

/* Exercice 42

Ecrire un algorithme triant un tableau par 
- On cherche l'élément de plus petite valeur dan le tableau
- Le placer en tête du tableau
- Recommencer avec le tableau moins la première case

*/

// On déclare un tableau avec des valeurs définies. On initialise une variable minimum admettant que sa valeur est la première valeur du tableau au départ

$tab = array (2, -22, -25, -40, 9, 7);
$min = $tab[0];

// On créé une boucle afin de trouver le minimum du tableau

for ($i = 0; $i < count($tab); $i++) {
    if ($tab[$i] < $min) {
    $min = $tab[$i];
    

    }
}

// On affiche le minimum du tableau

echo $min . "\n"; 

// On crée une boucle avec une boucle imbriquée, si tab[j] est supérieur à tab[i] on échange les deux. 

for ($i = 0; $i < count($tab) - 1; $i++) {
    for ($j = 0; $j < count($tab) ; $j++) {
        
    if  ($tab[$j] > $tab[$i]) {
        $temp = $tab[$i];
        $tab[$i] = $tab[$j];
        $tab[$j] = $temp;  
        
    } 
    }
}

// On affiche ainsi le tableau par ordre croissant


for ($i = 0; $i < count($tab) - 1; $i++) {
    echo $tab[$i]. ' ';
}










