<?php 
include "../Modele/Article.class.php";


echo "Donner le taux de TVA pour tous les articles : ";
$tauxTVA = readline("");
$reference = 0;
$designation = "";
$prixHT= 0;

$article1 = new Article($reference, $designation, $prixHT, $tauxTVA);

$data = $article1 -> afficherArticle();
echo "\n";
$prixTTC = $article1 -> calculerPrixTTC();
?>