<?php
/*Soit T un tableau de N réels. Ecrire un algorithme qui permet de calculer le nombre des occurrences d'un nombre X (c'est-à-dire combien de fois ce nombre X figure dans le tableau T)
*/

//on déclare le tableau et les valeurs
$t = [] ;
$n = readline('entrer le nombre de valeurs dans le tableau: ');

for ($i=0; $i < $n; $i++) { 
    $t[$i] = readline('entrer les valeurs du tableau: ');
}

//On demande la valeur X et on cherche ses occurences
$x = readline('entrer la valeur dont on veut le nombre d occurences: ');
$compteur = 0;
for ($i=0; $i < $n; $i++) { 
    if ($x == $t[$i]) {
        $compteur++;
    }
}

echo "il y a " . $compteur . " occurences de la valeur indiqué";
?>