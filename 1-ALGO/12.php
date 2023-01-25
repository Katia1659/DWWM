<?php
/* Ecrire un programme qui lit le prix HT d'un article, le
nombre d'articles et le taux de TVA, et qui fournit le prix total
TTC correspondant. Faire en sorte que des libellés
apparaissent clairement. (TTC=NA*HT*(1+TVA)) 

Debut 
Lire ht
lire na
lire tva
afficher ttc 
FIN
*/

$ht = readline("Entrez la valeur de l'article hors taxes = ");
$na = readline("Entrez le nombre d'articles = ");
$tva = readline('Entrez la TVA en pourcentage = ');
$ttc = $ht * $na * (1 + ($tva/100));
echo 'ht = ';
echo $ht;
echo PHP_EOL;
echo 'na = ';
echo $na;
echo PHP_EOL;
echo 'tva = ';
echo $tva;
echo PHP_EOL;
echo 'Le prix TTC est de = ';
echo $ttc;

?>