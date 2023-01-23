<?php
/* 
Ecrire un algorithme qui demande un nombre de départ et qui calcule sa factorielle

ecrire 'quel nombre'
lire nbr
tant que i != de nbr
total = total * i
*/


echo 'Début';
echo PHP_EOL;
// initialisation des variables
$a = 1;
$tt = 1;
$nbr = readline("Choisir un nombre ");

// calcul et affichage des nombres à additionner 
while ($a <= $nbr) {
    $tt = $tt * $a;
    echo $a;
    $a = $a + 1;
    if ($a <= $nbr) {
        // ajout des x entre les nombres mais mettre le dernier
        echo ' x ';
    }
}

//affichage du résultat 
echo ' = '. $tt. PHP_EOL;

echo 'Fin';
