<?php
require_once '../modele/Article.class.php';
//Demande a l'utilisateur combien de livre il veut enregistrer.
echo "Combien d'article : ";
$nbrArticle = readline();
echo "Taux TVA des articles ? :";
$tauxTVA = readline();

//Boucle pour permettre d'entree les données
for ($i = 1; $i <= $nbrArticle; $i++) {
    $article = "article$i";
    echo "Reference de l' $article : ";
    $reference = readline();
    echo "Désignation de l' $article: ";
    $designation = readline();
    echo "PrixHT de l' $article: ";
    $prixHT = readline();
    if (empty($prixHT)) {
        $prixHT = 0;
    }
    $$article = new Article($reference, $designation);
    $$article->setTauxTVA($tauxTVA);

    $$article->setPrixHT($prixHT);
    echo "Article $i : \n";
    $$article->afficherArticle();
}





