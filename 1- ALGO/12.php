<?php
/*
Ecrire un programmequi lit le prix HT d'un article, le nombre d'articles et le taux TVA, et qui le prix total TTC correspondant. Faire en sorte
que des libellés apparaissent clairement. (TTC=NA*HT*(1+TVA))

htA = readline
tvA = readline
nbA = readline
ttC = nbA*htA*(1+tvA)

debut
   lire htA
   lire tvA
   lire nbA
   lire ttc
fin
*/

//inisilisation des var
echo 'debut';
echo "\n";
$htA = readline('entrez le prix Hors taxe');
echo "\n";
$tvA = readline('entrez la tva');
echo "\n";
$nbA = readline('entrez le nb article');
echo "\n";
echo $ttc = $nbA*$htA*(1+$tvA/100);
echo "\n";
echo 'fin'

?>
