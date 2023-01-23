<?php
/* 
Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement. (TTC=NA*HT*(1+TVA))

ht = saisie, na = ?, tva = ?, ttc = ?;
ht = saisie, na = saisie, tva = ?, ttc = ?;
ht = saisie, na = saisie, tva = saisie, ttc = ?;
ht = saisie, na = saisie, tva = saisie, ttc = résultat;


*/

echo 'Début';
echo PHP_EOL;

// initialisation des variables
$ht = readline("Le prix HT : ");
$na = readline("Le nombre d'article : ");
$tva = readline("Le taux de tva : ");
echo PHP_EOL;

//Calcul
$ttc = ($ht * $na * (1 + $tva / 100));

//affichage
echo 'Le total est : ' . $ttc . PHP_EOL;

echo 'Fin';
