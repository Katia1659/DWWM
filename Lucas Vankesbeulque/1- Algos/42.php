<?php
/* ecrire un algorithme triant un tableau par 
on cherche l'élément de plus petite valeur dans le tableau 
le placer en tete du tableau recommencer avec le tableau moins la premiere case
*/

//initialisation du tableau
$temp=0;
$tab=array (14,3,9,2,5);


for ($i=0; $i < count ($tab) ; $i++) { 
    echo $tab[$i];
}

echo PHP_EOL;

//boucle boucle pour inverser les valeurs
for ($i=0; $i < count ($tab) ; $i++) { 
    for ($j=0; $j < count($tab) ; $j++) { 
        if ($tab[$j] > $tab[$i]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j] = $temp;
            
        }
    }
    
}

echo PHP_EOL;

for ($i=0; $i < count ($tab) ; $i++) { 
    echo $tab[$i];
}


