<?php

include_once "../Modele/Article.class.php";

// On initialise le taux de TVA afin qu'il ne soit demandé qu'une seule fois 

$tauxTVA  = readline("Donner le taux de TVA pour tous les articles : ");
echo "Le taux de TVA est : ".$tauxTVA."% \n";

// On demande à l'utilisateur combien d'articles il souhaite ajouter

$nbreArticle = readline("Saisissez le nombre d'articles que vous voulez ajouter : ");

// On crée un nouvel objet Article avec ses caractéristiques

echo "Article 1 \n";

$reference = 0;
$designation = "";
$prixHT = 0;

$article1 = new Article ($reference, $designation, $prixHT, $tauxTVA);

$message = $article1->afficherArticle();

echo $message."\n";

// On crée une boucle qui demande plusieurs éléments à l'utilisateur et crée un nouvel objet en conséquence à chaque tour de boucle 

for($i = 2; $i <= $nbreArticle; $i++) {
    echo "Article $i \n";

    $reference = readline("Donner la référence : ");
    $designation = readline("Donner la désignation : ");
    $prixHT = readline("Donner le prix HT : ");

    $article[$i] = new Article ($reference, $designation, $prixHT, $tauxTVA);
    $message = $article[$i]->afficherArticle();

    echo $message;
}







