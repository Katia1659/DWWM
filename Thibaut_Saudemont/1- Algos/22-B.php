<?php
/* 
Modifiez ensuite l'algorithme pour que le programme affiche de surcroit en quelle position avait été saisie ce nombre.

pour i allant de 1 à 20
choisir une nombre 
lire nbr
Si nbr > pgnbr
alors pgnbr = nbr
compteur = i
i = i+1
afficher pgnbr

*/

echo 'Début';
echo PHP_EOL;
// initialisation des variables en dehors de la boucle 
$compteur = 1;
$i = 0;
$nbr = readline("Choisir un nombre ? ");
$pgNbr = $nbr;

for ($i = 1; $i < 20; $i++) {  // initialisation des variables en dans la boucle 
    $nbr = readline("Choisir un nombre ? ");
    if ($nbr > $pgNbr) { // Echange de valeur plus grande au besoin 
        $pgNbr = $nbr;
        // enregistrement de i pour le compteur de place 
        $compteur = $i + 1;
    }
}

//affichage du résultat 
echo PHP_EOL;
echo 'Le nombre le plus grand est : ' . $pgNbr . PHP_EOL;
echo 'Il etait à la place : ' . $compteur . PHP_EOL;

echo 'Fin';
