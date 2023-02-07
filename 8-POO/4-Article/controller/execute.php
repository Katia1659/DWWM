<?php
include_once "../modele/article.class.php";

$count = 0;

$nbrArticle = readline("cb d'article ? : ");
$tauxTva = readline("Donner le taux de TVA pour tous les articles : ");
echo "Le taux TVA est : ".$tauxTva."%"."\n";

for ($i=1; $i < $nbrArticle ; $i++) { 
    $count = $count +1  ;
    $article = "article $i" ;
    $reference = readline("Donner la référence de l'article ".$count." : ");
    $designation = readline("Donner la désignation de l'article ".$count." : ");
    $prixHt = readline("Donner le prix HT de l'article ".$count." : ");
    //si prixht non renseigner lui donner valeur
    if ($prixHt == 0 or null) {
        $prixHt = 0;
    }
    //ouvre la methode
    $$article = new Article($reference,$designation);
    //recuper la valeur de taux tva et prix ht
    $$article->setTauxTva($tauxTva);
    $$article->setPrixHt($prixHt);

        echo $article."\n";
        //affichage grace a afficher article
    $$article->afficherArticle();

         echo "\n";

}



?>