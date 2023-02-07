<?php
include_once "../modele/Article.class.php";

echo "Donnez le taux de TVA pour tous les articles : ";
$tauxTva = readline("");
echo "Le taux de TVA est ".$tauxTva."%"."\n";
echo "Article 1"."\n";
echo "Donner la reference"."\n";
$reference = readline("");
echo "Donner la designation"."\n";
$designation = readline("");
echo "le prixHt";
$prixHt = readline("");
$prixTtc = 0;



$Article = new Article($tauxTva, $reference, $designation, $prixHt, $prixTtc);

$Article->setReference($reference);
$Article->setDesignation($designation);
$Article->setPrixHt($prixHt);
$Article->setTauxTva($tauxTva);

$calculerPrixTtc = $Article->calculerPrixTtc();
$afficherArticle = $Article->afficherArticle();

echo $afficherArticle;



?>