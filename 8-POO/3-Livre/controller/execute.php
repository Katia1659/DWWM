<?php
/*
include_once "../modele/Personne.class.php";
$titre = "Simetierre";
$auteur = "Stephen King";
$prix = "8.50";
$livre1= new Livre ($titre, $auteur, $prix);
echo "Livre 1 : \n";
$livre1-> affichage();
$titre = "American Psycho";
$auteur = "Bret Easton Ellis";
$prix = "9.30";
$livre2 = new Livre ($titre, $auteur, $prix);
echo "Livre 2 :\n";
$livre2-> affichage();
*/
include_once "../modele/Personne.class.php";


for ($i=1; $i >0 ; $i++) {  
    Echo "Livre $i";
    $titre[$i] = readline("entrez le titre : ");
    $auteur[$i] = readline("Entrez le nom complet de l'auteur : ");
    $prixTemp[$i] = readline("Donner le prix : ");
    if ($prixTemp[$i]==''){
        $prix[$i] = 0;
    }
    else{
        $prix[$i] = $prixTemp[$i];
    }
    

    $livre[$i] = new livre($reference, $designation, $prixHT, $tauxTVA);
    $livre[$i]->setTitre ($titre[$i]);
    $livre[$i]->setAuteur ($auteur[$i]);
    $livre[$i]->setPrix($prix[$i]);
    $livre[$i]-> affichage($i);
    $reponse = readline("Voulez vous rentrer un nouveau livre ?\n Rentrez oui ou non \n");
    if ($reponse == "non"){
        $i = -1;
    }
}
