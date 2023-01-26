<?php
/*
Donnez le résultat de la multiplication de deux nombres en ne faisant que des additions.

var nb1,nb2,produit : entier ;

Debut 
lire nb1
lire nb2
pour i allant de 1 a nb1
produit = produit + nb2
afficher produit
*/

// initialisation des variables
$produit = 0;

// on demande deux nombre a l'utilisateur
$nb1 = readline("Entrez un nombre : ");
$nb2 = readline("Entrez un second nombre : ");

// calcul du produit
for ($i=1; $i <= $nb1 ; $i++) {
$produit = $produit + $nb2;
}

// on affiche le resultat
echo $nb1.' x '.$nb2.' = '.$produit;
?>