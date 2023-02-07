<?php
include_once "../modele/Article.class.php";

$tva = readline("Donner la TVA : ");
echo "la tva est de $tva % \n";

echo "Article 1 :\n";
$reference = readline("Donner la référence : ");
$designation = readline("Donner la désignation : ");
$prixHt = readline("Donner le prix HT : ");

$article1 = new Article($reference, $designation, $prixHt, $tva);
echo $article1->afficherArticle();

for ($i = 2; $i <= 4; $i++) {

    echo "Article $i :\n";
    $reference = readline("Donner la référence : ");
    $designation = readline("Donner la désignation : ");
    $prixht = readline("Donner le prix HT : ");

    $article[$i] = new Article($reference, $designation, $prixht, $tva);
    $article[$i]->afficherArticle();
}






?>