<?php

/*
Ecrire un programme qui lit le prix HT d'un article, le nombre d'article et le taux de TVA, et qui fournit le prix total TTC correspondant.
Faire en sorte que des libellés apparraissent clairement. (TTC=NA*HT*(1+TVA))

Debut
    Ecrire ( entrez pht );
    Lire pht;
    Ecrire ( entrez nbArticle );
    Lire nbArticle;
    Ecrire ( entrez tva );
    lire tva;
    
    ttc <- nbAricle * pht * (1 + tva);
    Ecrire ttc;
*/

// damande à l'utilisateur de rentrer un prix HT, le nb d'article, et la TVA
$pht = readline("saisir pht");
$nbArticle = readline("saisir nombre article");
$tva = readline("saisir tva");

//calcule du prix TTC
$ttc = $nbArticle * $pht * (1 + $tva);

//Affiche le prix HT, le nb d'article, la TVA et le prix TTC
echo ("Debut");
echo "\n";

echo $pht;
echo "\n";

echo $nbArticle;
echo "\n";

echo $tva;
echo "\n";

echo $ttc;
echo "\n";

echo "Fin";

?>

