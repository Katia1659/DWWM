<?php
/* Ecrire un programme qui lit le prix HT d'un article, le nombre d'aticles et le taux de TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement. (TTC = NA * HT *(1+TVA)) 
ecrire "entrer le prix"
ecrire "entrez votre nombre"
ecrire "entrez taux de TVA"
lire ttc = nbarticle * prixht * (1+ tva)

*/

$prixht = readline('Entrez le prix :');
echo PHP_EOL;

$nbarticle = readline('Entrez votre nombre d\'article :');
echo PHP_EOL;

$tva = readline('Entrez taux de TVA :'); 
echo PHP_EOL;

echo 'le prix est de  : ' . $ttc = $nbarticle * $prixht * (1 + $tva);
?>





