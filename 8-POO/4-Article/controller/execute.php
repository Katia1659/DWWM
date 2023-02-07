<?php
include_once "../modele/Article.class.php";


$tauxTVA = readline("Donner le taux de TVA pour tous les articles: ");
echo "Le taux de TVA est de ". $tauxTVA. "%";
echo "\n";
echo "\n";



//=================== Article 1 (en dur) ===================
echo "Article 1: ";
echo "\n";

//On créer l'objet de classe Article
$article1 = new Article(0,  "");

$article1->setTauxTVA($tauxTVA);


//On appelle les différentes méthodes
$afficher = $article1->afficherArticle();
echo $afficher;


//=================== Article 2 (en dur) ===================
// echo "\n";
// echo "\n";
// echo "Article 2: ";
// echo "\n";

// //On  demande les variables
// $reference = readline("Donner la référence: ");
// $designation = readline("Donner la désignation: ");
// $prixHT = readline("Donner le prix HT: ");

// $article2 = new Article($reference, $designation);
// $article2->setPrixHT($prixHT);
// $article2->setTauxTVA($tauxTVA);

// //On appelle les différentes méthodes
// $afficher = $article2->afficherArticle();
// echo $afficher;

//=================== boucle article ===================
echo "\n";
echo "\n";
$nbArticles = readline("Entrer le nombre darticles ");
echo "\n";

for ($i=0; $i < $nbArticles; $i++ ){
    echo "\n";
    echo "\n"; 
    echo "Article ". ($i + 1). ": ";
    echo "\n";
    

    //On  demande les variables
    $reference = readline("Donner la référence: ");
    $designation = readline("Donner la désignation: ");
    $prixHT = readline("Donner le prix HT: ");

    //On créer l'objet et on hydrate ses attributs
    $article = new Article($reference, $designation);
    $article->setPrixHT($prixHT);
    $article->setTauxTVA($tauxTVA);

    //On appelle les différentes méthodes
    $afficher = $article->afficherArticle();
    echo $afficher;
}

?>