<?php
/*Ecrire un programme qui lit le prix HT d'un article, le nombre d'article et le taux de TVA, et qui fournit le prix total TTC correspondant.
faire en sorte que des libellés apparaissent clairement.

variables :
prixHT, nbrArticle, tva,, ttc;

debut 
ecrire " Veuillez saisie le nombre d'article";
lire nbrArticle;

ecrire " saisie le prix HT de l'article :"
lire prixHt;

ecrire " saisie le taux TVA" 
lire TVA

ttc = nbrArticle * prixHt*(1+TVA);

ecrire "le prix totale tout taxe compris est de : "+ttc;

*/
// Déclaration de variable
$nbrArticle= readline("Veuillez saisie le nombre d'article >>>");

$prixHT= readline(" Saisie le prix HT de l'article >>>");

$tva = 0.2; /* supposant TVA fixe 20%*/

$ttc= $nbrArticle * $prixHT *(1+$tva);

// Affichage :
print "le prix totale toute taxe compris est de : $ttc";


?>