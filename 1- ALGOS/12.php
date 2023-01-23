<?php
/*Ecrire un programme qui lit le prix HT d'un article, le
nombre d'articles et le taux de TVA, et qui fournit le prix total
TTC correspondant. Faire en sorte que des libellés
a araissent clairement.

Dans un premier temps nous allons demander :
    -Le prix Hors taxe.
    -Le nombre d'article.
    -Le Taux de TVA.
*/

$ht = readline('Prix Hors Taxe ?');
$article = readline('Nombre d Articles ?');
$tva = readline('Quel est le taux de TVA ?');

echo $article*$ht*(1+($tva/100));

?>