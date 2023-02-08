<?php 
include_once "../modele/Article.class.php";


$tauxTva = readline("Le taux de TVA est : ");
$reference = readline("Référence : ");
$designation = readline("Désignation : ");
$prixHt = readline("Prix HT : ");

$article1 = new Article($reference, $designation, $prixHt, $tauxTva);
$prixTtc = $article1 -> calcul();

echo "Le prix TTC est : " . $prixTtc;
echo PHP_EOL;
echo "Article 2";
echo PHP_EOL;

//ARTICLE 2

$tauxTva = readline("Le taux de TVA est : ");
$reference = readline("Référence : ");
$designation = readline("Désignation : ");
$prixHt = readline("Prix HT : ");

$article2 = new Article($reference, $designation, $prixHt, $tauxTva);
$prixTtc = $article2 -> calcul();

echo "Le prix TTC est : " . $prixTtc;
echo PHP_EOL;
echo "Article 3";
echo PHP_EOL;

// ARTICLE 3

$tauxTva = readline("Le taux de TVA est : ");
$reference = readline("Référence : ");
$designation = readline("Désignation : ");
$prixHt = readline("Prix HT : ");

$article3 = new Article($reference, $designation, $prixHt, $tauxTva);
$prixTtc = $article3 -> calcul();

echo "Le prix TTC est : " . $prixTtc;
echo PHP_EOL;
echo "Article 4";
echo PHP_EOL;


//ARTICLE 4

$tauxTva = readline("Le taux de TVA est : ");
$reference = readline("Référence : ");
$designation = readline("Désignation : ");
$prixHt = readline("Prix HT : ");

$article4 = new Article($reference, $designation, $prixHt, $tauxTva);
$prixTtc = $article4 -> calcul();

echo "Le prix TTC est : " . $prixTtc;
