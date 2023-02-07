<?php
include_once "../modele/Article.class.php";

echo "donnez le taux de TVA ";
$tauxTva = readline("");
$reference = 0;
$designation = "";
$prixHt = 0;
$prixTtc = 0;

$Article1 = new Article($reference, $designation, $prixHt, $tauxTva, $prixTtc);

echo "Le taux de TVA est".$tauxTva."\n"."\n";
echo "Article 1"."\n"."\n";
$afficherArticle = $Article1->afficherArticle();


echo "Article 2"."\n"."\n";
echo "Donner la reference ";
$reference = readline("");
echo "Donner la designation ";
$designation = readline("");
echo "Donner le prix HT ";
$prixHt = readline("");

$Article2 = new Article($reference, $designation, $prixHt, $tauxTva, $prixTtc);

$afficherArticle = $Article2->afficherArticle();

echo "Article 3"."\n"."\n";
echo "Donner la reference ";
$reference = readline("");
echo "Donner la designation ";
$designation = readline("");
echo "Donner le prix HT ";
$prixHt = readline("");

$Article3 = new Article($reference, $designation, $prixHt, $tauxTva, $prixTtc);

$afficherArticle = $Article3->afficherArticle();

$reference = 111;
$designation = "ATA";
$prixHt = 100;
$prixTtc = 120;

$Article4 = new Article($reference, $designation, $prixHt, $tauxTva, $prixTtc);

echo "Article 4"."\n"."\n";
$afficherArticle = $Article4->afficherArticle();







?>