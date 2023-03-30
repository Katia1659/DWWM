<?php 
// Inclut le fichier Article.class.php  
include "../Modele/Article.class.php";



// Demande des données à l'utilisateur
$tauxTVA = readline("Donner le taux de TVA pour tous les articles : ");
echo "Le taux de TVA est : " . $tauxTVA . "\n"; 
$reference = 0;
$designation = "";
$prixHT= 0;

// Instanciation de l'objet
$article1 = new Article($reference, $designation, $prixHT, $tauxTVA);

echo "Article 1 : "."\n";

// Affectation de la méthode
$data = $article1 -> afficherArticle();
echo "\n";
$prixTTC = $article1 -> calculerPrixTTC();
echo "\n";

// Demande le nombre d'article à l'utilisateur
$count = readline ("Combien d'articles avez-vous ? ");

// Boucle d'affichage et de demande de données à l'utilisateur
for($i = 2; $i <= $count; $i++) {
    echo "Article $i" . "\n";

    $reference = readline("Donner la référence : ");
    $designation = readline("Donner la désignation : ");
    $prixHT = readline("Donner le prix HT : ");

    $article[$i] = new Article ($reference, $designation, $prixHT, $tauxTVA);
    $article[$i]->afficherArticle();

}




?>