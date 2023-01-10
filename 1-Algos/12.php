<?php
/*Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA, et qui fournit le prix total TTC Correspondant. 
Faire en sorte que des libellés apparaissent clairement. (TTC=NA*HT(1+TVA))
début
écire "entrer le prix ht d'un article"
lire(ht)
écrire "entrer le nombre d'articles"
lire(nb)
écrire "entrer le taux de tva"
lire(tva)
ttc = nb * ht * (1 + tva)
écrire(ttc)
fin
*/

echo 'début';
echo "\n";

$ht = readline('entrer le prix hors taxe d un article') ;
echo "\n";

$nb = readline('entrer le nombre d article') ;
echo "\n";

$tva = readline('entrer le taux de tva') ;
echo "\n";

$ttc = $nb * $ht * (1 + $tva) ;
echo "ttc = nb * ht * (1 + tva)" ;
echo "\n";
echo "ttc = "  . $nb . " * " . $ht . " * " . "(1 + " . $tva . ") = ";

echo $ttc ;
?>