<?php
/*Ecrire un algorithme qui calcule le nombre le nombre d'entier pairs et le nombre d'entiers impairs d'un tableau entiers.
*/

//on déclare le tableau et les valeurs
$tab = [] ;
$n = readline('entrer le nombre de valeurs dans le tableau: ');

for ($i=0; $i < $n; $i++) { 
    $tab[$i] = readline('entrer les valeurs du tableau: ');
}

//on initialise deux compteurs
$cpair = 0;
$cimp = 0;

//On cherche les pairs et les impairs dans le tableau (%2 == 0 indique si ils sont paires )
for ($i=0; $i < $n; $i++) { 
    if ($tab[$i]%2 == 0) {
        $cpair++;
    } else {
        $cimp++;
    }
    
}

echo "le nombre de valeurs pairs: " . $cpair . "\n";
echo "le nombre de valeurs impairs: " . $cimp . "\n";

?>