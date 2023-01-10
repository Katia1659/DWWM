<?php
/* Donnez le résultat de la multiplication de deux nombres  en ne faisant que des additions.
*/

$a = readline('entrez une première valeur: ');
$b = readline('entrez une seconde valeur: ') ;
$produit = 0 ;
//on initialise les valeurs

for ($i=0; $i < $b; $i++) { 
    $produit = $produit + $a ;
    //on réalise la multiplication sans multiplier (si a=3 et b=3 alors 5+5+5)
}

echo $produit ;
?>