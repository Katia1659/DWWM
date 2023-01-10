<?php
/* 
Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur et qui lui dit en suite lequel était le plus grand parmi ces 20 nombres

pour i allant de 1 à 20
choisir une nombre 
lire nbr
Si nbr > pgnbr
alors pgnbr = nbr
i = i+1
afficher pgnbr

*/

echo 'Début';
echo PHP_EOL;
// initialisation des variables en dehors de la boucle 
$i = 0;
$nbr = readline("Choisir un nombre ? ");
$pgNbr = $nbr;
for ($i = 1; $i < 20; $i++) {  // initialisation des variables en dans la boucle 
    $nbr = readline("Choisir un nombre ? ");
    if ($nbr > $pgNbr) { // Echange de valeur plus grande au besoin 
        $pgNbr = $nbr;
    }
}

//affichage du résultat 
echo PHP_EOL;
echo 'Le nombre le plus grand est : ' . $pgNbr . PHP_EOL;

echo 'Fin';

