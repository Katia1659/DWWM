<?php
include_once "../Model/Article.class.php";

//On demande les valeurs des différents paramètres liée à la class article, la boucle for permet de l'éxécuté 4 fois de suite comme demander dans l'exercice.
$tauxTVA = readline("Donnez la TVA : ");
for ($i=1; $i <=4 ; $i++) { 
    $article = "article_$i";
    echo "$article \n";
    $reference = readline("Donnez la référence : ");
    $designation = readline("Donnez la désignation : ");
    $prixHT = readline("Donnez le prix Hors Taxes : ");
    $$article = new Article($reference,$designation,$prixHT,$tauxTVA);
    $affichage = $$article->afficherArticle();
    echo "$affichage \n";

}

?>