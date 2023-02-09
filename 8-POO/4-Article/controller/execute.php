<?php

include("../modele/Article.class.php");


//demande de tva
$tva = readline("donnez la tva : ");
echo "le taux tva est : $tva%\n";


//article 1
echo "article 1 : ";


//demande à l'utilisateur 
$ref = readline("donnez la reference : ");
$design = readline("donnez la designation : ");
$prixHt = readline("donnez le prix hors taxes : ");


//entre dans l'objet 
$article = new Article($ref,$design,$prixHt,$tva);


//calcule et affiche le resultat
$ttc = $article->calculePrixTtc();
echo $article->afficherArticle();
echo "\n";



//article 2 
echo "\narticle 2 : \n";


//demande à l'utilisateur 
$ref2 = readline("donnez la reference : ");
$design2 = readline("donnez la designation : ");
$prixHt2 = readline("donnez le prix hors taxes : ");


//entre dans l'objet 
$article2 = new Article($ref2,$design2,$prixHt2,$tva);


//calcule et affiche le resultat
$ttc = $article2->calculePrixTtc();
echo $article2->afficherArticle();








?>