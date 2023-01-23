<?php

/*
Ecrivez un algorithme calculant la somme des valeurs d'un tableau (on suppose que le tableau a été prealablement saisi).
*/
$som =0;
// creation tableau
$note = array();

//remplissage tableau

$note [0] = 1;
$note [1] = 2;
$note [2] = 3;
$note [3] = 4;
$note [4] = 5;
$note [5] = 6;
$note [6] = 17;
$note [7] = 18;
$note [8] = 19;

// boucle pour additionner chaque note du tableau

for ($i=0; $i <= 8; $i++) { 
    $som = $som + $note[$i];
}

echo $som."\n";
echo "fin";

?>