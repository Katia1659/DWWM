<?php
include_once "../modele/Article.class.php";

/*POUR L'ARTICLE*/

/*INFORMATION DE LA TVA*/
$tva = readline("Donner la tva : ");
echo "la tva est de $tva % \n";

echo "Article 1 :\n";
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$ref = readline("Donner la référence : ");
$des = readline("Donner la désignation : ");
$prixht = readline("Donner le prix HT : ");
/*CREACTION DE L'OBJET*/
$article1 = new Article($ref, $des, $prixht, $tva);
echo $article1->afficherArticle();

for ($i = 2; $i <= 4; $i++) {

    echo "Article $i :\n";
   /*DEMANDE D'INFORMATION A L'UTILISATEUR */
    $ref = readline("Donner la référence : ");
    $des = readline("Donner la désignation : ");
    $prixht = readline("Donner le prix HT : ");
    /*CREACTION DE L'OBJET*/
    $article[$i] = new Article($ref, $des, $prixht, $tva);
    $article[$i]->afficherArticle();
}  


