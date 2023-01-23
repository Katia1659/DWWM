<?php
/* Ecrire un algorithme qui demande deux nombres à l'utilisateur et
l'informe ensuite si leur produit est négatif ou positif (on laisse de
côté le cas où le produit est nul). Attention toutefois : on ne doit
pas calculer le produit des deux nombres.

Debut
    lire a 
    lire b 
    si a>0 et b>0 ou si a<0 et b<0
        ecrire le produit es positif
    sinon 
        ecrire le produit es negatif
Fin
*/

$a = readline('Entrez un nombre a : ');
$b = readline('Entrez un nombre b : ');
if (($a > 0 and $b > 0) or ($a < 0 and $b < 0)){
    echo 'Le produit est positif';
}
else{
    echo 'Le produit est negatif';
}
?>