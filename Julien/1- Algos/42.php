<?php
/* Ecrire un algorithme triant un tableau par
- on cherche l'élément de plus petite valeur dans le tableau
- le placer en tête du tableau
- recommencer avec le tableau moins la première case*/

// Création et attribution du tableau
$tab = array (14, 3, 9, 2, 5);
$temp = 0;

for ($i=0; $i < count ($tab); $i++) { 
    if ($table[$i]> $table[$i+1])
    for ($j=0; $j < count ($tab); $j++) { 
        if ($tab [$j] < $tab[$i]) {
            $temp = $tab[$j];
            $tab [$i] = $temp;
            $temp = $tab [$i];
        }
        echo $tab[$i]; 
        echo "\n";
       } 
    echo $tab[$i]; 
    echo "\n";
}

?>

