<?php
/*Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement
(TTC = NA*HT*(1+TVA))

Lire "prix HT"
HT <- 0
Lire "nb articles"
nbA <- 0
TVA <- 0.55


Ecrire TTC=NA*HT*(1+TVA)


*/

$ht = readline('Prix HT ?');
$TVA = 0.55;
$nA= readline('Nombres d articles');
$ttc = $nA*$ht*(1+$TVA);

echo 'Prix HT: '.$ht."\n";
echo 'TVA ='.$TVA."\n";
echo 'Nombre d articles'.$nA."\n";
echo 'TTC = nA*ht*(1+TVA)= '.$ttc;

?>