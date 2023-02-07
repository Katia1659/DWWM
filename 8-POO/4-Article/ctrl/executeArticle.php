<?php


include_once "../modele/Article.class.php";



$articles = [];
$i = 1;
$rep = readline("voulez vous ajouter une article? (o/n): ");
do
 {
    $reference = readline("Donner la reference: ");
    $designation = readline("Donner la désignation: ");
    $prixHT = readline("Donner le prix HT: ");
    $article["Article$i"] = new Article($reference, $designation, $prixHT);
    $i++;
    echo "\n";
    $rep = readline("voulez vous ajouter une article? (o/n): ");
}
 while ($rep != 'n');

foreach ($article as $key => $values) 
{
    echo $key.": "."\n";
    $values->setTauxTVA(20);
    $values->afficherArticle();
}