<?php

/* Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA, et qui fournit le prix total TTC correspondant.
Faire en sorte que des libellés apparaissent clairement. (TTC = NA * HT * (1+TVA))

*/


// On demande à l'utilisateur de saisir le prix Hors taxe, le nombre d'articles, et enfin la TVA de l'article acheté .
// Le prix TTC est égal au (nombre d'articles x son prix hors taxe) x (sa tva)

$prixHT = readline('Entrez le prix HT : ');
$nbarticles = readline("Entrez le nombre d'articles : ");
$tva = readline("Entrez le taux de TVA : "); 
$prixTTC = ($nbarticles * $prixht * (1 + $tva/100)); 

// On affiche le prix TTC 

echo "Le prix ttc est de ";
echo $prixTTC;
echo " €";

