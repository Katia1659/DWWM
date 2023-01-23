<?php

/* Exercice 28 

Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur : 
1
12
123
1234
12345
123456
1234567

*/

// Demande de saisie du nombre de lignes à afficher par l'utilisateur 
$lignes = readline ('Saisissez le nombre de lignes du triangle : ');


// On initialise une première boucle 
for ($i = 1; $i <= $lignes; $i++) {
    for ($j = 1; $j <= $i; $j++) {

// On initialise une seconde boucle qui parcourt la première. Dans la première ligne i = 1, et j=1, ils sont égaux donc on passe à la ligne. Pour la seconde ligne, i est égale à 2, j est d'abord égale à 1, ensuite j est égale à 2, les deux sont égaux donc on repasse à la ligne et ainsi de suite pour chaque ligne
    echo $j;
}
// On sort de la première boucle afin d'afficher un triangle de valeurs et on passe à la ligne une fois que la boucle j a été parcourue.
    echo "\n";
}
