<?php
include_once "../modele/Personne.class.php";

for ($i=0; $i <1 ; $i++) { 
    $tauxTVA = readline("Entrez le taux de TVA \n");
    echo "Le taux de TVA est de $tauxTVA \n";

for ($j=1; $j > 0 ; $j++) { 
    $reference[$j]= "";
    $designation[$j]= "";
    
    
    $reference[$j] = readline("Donner la référence : ");
    $designation[$j] = readline("Donner la désignation : ");
    $prixHTTemp[$j] = readline("Donner le prixHT : ");
    if ($prixHTTemp[$j]==''){
        $prixHT[$j] = 0;
    }
    else{
        $prixHT[$j] = $prixHTTemp[$j];
    }
    

    $article[$j] = new Article($reference, $designation, $prixHT, $tauxTVA);
    $article[$j]-> setReference($reference[$j]);
    $article[$j]-> setDesignation($designation[$j]);
    $article[$j]-> setPrixHT($prixHT[$j]);
    $article[$j]-> setTauxTVA($tauxTVA);
    $prixTTC[$j] = $article[$j]-> prixTTC($prixHT[$j],$tauxTVA);
    $article[$j]-> afficherArticle($j,$prixTTC[$j]);
    $reponse = readline("Voulez vous rentrer un nouvel article ?\n Rentrez oui ou non \n");
    if ($reponse == "non"){
        $j = -1;
    }
}
}
/*
$tauxTVA = "20";
$article1 = new Article($reference, $designation, $prixHT, $tauxTVA);
$article1-> setReference($reference);
$article1-> setDesignation($designation);
$article1-> setPrixHT($prixHT);
$article1-> setTauxTVA($tauxTVA);

//Affichage article 1
$numArticle ="1";

//Attribution Article 2
$reference = "111";
$designation = "ATA";
$article1 = new Article($reference, $designation, $prixHT, $tauxTVA);
$article1-> setReference($reference);
$article1-> setDesignation($designation);
$article1-> setPrixHT(100);
$article1-> setTauxTVA($tauxTVA);
//Affichage article 2
$numArticle ="2";
$reference = $article1-> getReference();
$designation = $article1->getDesignation();
$prixHT = $article1-> getPrixHT();
$prixTTC = $article1-> prixTTC($prixHT,$tauxTVA);
$article1-> afficherArticle($numArticle,$prixTTC);

//Attribution Article 3
$reference = "122";
$designation = "RER";
$article1 = new Article($reference, $designation, $prixHT, $tauxTVA);
$article1-> setReference($reference);
$article1-> setDesignation($designation);
$article1-> setPrixHT($prixHT);
$article1-> setTauxTVA($tauxTVA);
//Affichage article 3
$numArticle ="3";
$reference = $article1-> getReference();
$designation = $article1->getDesignation();
$prixHT = $article1-> getPrixHT($prixHT);
$prixTTC = $article1-> prixTTC($prixHT,$tauxTVA);
$article1-> afficherArticle($numArticle,$prixTTC);*/