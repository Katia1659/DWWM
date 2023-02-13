<?php

    include "../modele/Article.class.php";

    $articles = array();
    $reponse = 'oui';
    $i = 1;
    do{ 
        $reference = readline("Donner la référence du produit: ");
        $designation = readline("Désignation : ");
        $prixHT = readline("Insérez le prix HT : ");
        $articles[$i] = new Article($reference, $designation, $prixHT);
        $i++;
        $reponse = readline("Voulez-vous ajouter un article ? (oui/non)");
    }
    while($reponse != "non");

    foreach ($articles as $key => $value) {
        $value->setTauxTVA(20);
        $value->AfficherArticle();
    }
?>