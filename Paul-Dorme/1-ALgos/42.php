<?php
/* Ecrire un algorithme triant un tableau par 
on cherche l'élément de plus petite valeur dans le tableau 
le placer en tete du tableau recommencer avec le tableau moins la premiere case
*/


$temp=0;

//Creation de tableau initial
$tab=array (14,3,9,2,5);

//Affichage tableau initial
for ($i=0; $i < count ($tab) ; $i++) { 
    echo $tab[$i];
}

echo "\n";

// Tri
for ($i=0; $i < count ($tab) ; $i++) { 
    for ($j=0; $j < count($tab) ; $j++) { 
        if ($tab[$j] > $tab[$i]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j] = $temp;
            
        }
    }
    
}

echo "\n";

for ($i=0; $i < count ($tab) ; $i++) { 
    echo $tab[$i];
}


