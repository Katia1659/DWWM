<?php
/* 
Ecrire un algorithme triant un tableau par :
- On cherche l'élément de plus petite valeur dans le tableau 
- Le placer en tête du tableau 
- Recommencer avec le tableau moins la première case 

tableau 

boucle pour passer sur toute les cas 
si pour choisir le plus petit 
valeur temp pour enregistrer le case écrasée
*/

echo 'Début';
echo PHP_EOL;
$temp = 0;
$tab = array(14, 3, 9, 2, 5);
for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}

echo PHP_EOL;
for ($i = 0; $i < sizeof($tab); $i++) {
    for ($j = 0; $j < sizeof($tab); $j++) {
        if ($tab[$j] > $tab[$i]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j]  = $temp;
        }
    }
}

for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}

echo 'Fin';
