<?php
/* Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA, et qui fournis le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement. (TTC=NA*HT*(1+TVA)) */
$ht = readline ("Entrez le prix hors taxe de l'article");
$nba = readline ("Entrez le nombre d'article");
$tva = readline ("Entrez la TVA");
$ttc = $nba * $ht *(1+$tva);
echo "Si l'on prend le nombre d'article qui est de $nba et qu'on le multiplie avec prix hors taxe de $ht € et en multipliant les deux avec la TVA de $tva +1 alors le prix total toute taxe comprise est de $ttc €";
?>