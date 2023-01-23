<?php
/* Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de la TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés appairaissent clairement. (TTC=NA*HT*(1+TVA)) 
Var prix, quantite, tx, total;
    début
        Ecrire "Veuillez saisir le prix";
        Lire prix;
        Ecrire "Veuillez saisir le nombre d'article";
        Lire quantite;
        Ecrire "Veuillez saisir le taux de la TVA";
        Lire tx;
        total = (quantite * prix * (1+tx/100));
        Ecrire total;
    fin

$prix = readline('Veuillez saisir le prix :');
$quantite = readline(' Veuillez saisir la quantité darticle :');
$tx = readline('Veuillez saisir le taux de TVA :');
$total = ($quantite * $prix * (1+$tx/100));

echo $total;

*/

$prix = readline('Veuillez saisir le prix :');
$quantite = readline(' Veuillez saisir la quantité darticle :');
$tx = readline('Veuillez saisir le taux de TVA :');
$total = ($quantite * $prix * (1+$tx/100));

echo $total;
?>