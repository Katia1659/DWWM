<?php
/*
Ecrire l'algorithme permettant d'imprimer le triangle suivant, le
nombre de lignes étant donné par l'utilisateur :
1
12
123
1234
12345
123456
1234567
Debut
lire nbLigne
pour i allant de 1 a nbLigne
ecrire la concatenation de i avec i+1 ($i.($i+1))
*/

// initialisation des variables
$ligne = '';

// on demande a l'utilisateur un nombre de lignes et on affiche le resultat
$nb = readline("Entrez le nombre de lignes : ");
for ($i=1; $i <= $nb ; $i++) { 
    // concatenation prendra la valeur de 1 au premier tour, 12 au second tour(1.i),123 au troisieme tour (12.i) etc...
    $ligne = $ligne.$i;
    echo $ligne;
    echo PHP_EOL;
}
?>