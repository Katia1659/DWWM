<?php

include("../modele/Livre.class.php");

//livre 1 

echo "livre 1 : ";
echo "\n";

//demande a l'utilisateur
$auteur = readline("entrer le nom et prenom de l'auteur : ");
$titre = readline("entrez le titre du livre : ");
$prix = readline("donnez le prix du titre : ");


//entre dans l'objet
$livre = new Livre($prix,$titre,$auteur);

$auteur = $livre->auteur();

$titre = $livre->titre();

$prix = $livre->prix();

//affiche le resutltat

echo "Le nom et prenom est : [$auteur] ";
echo "le titre du livre est : [$titre] ";
echo "le prix est : [$prix] \n";



//livre 2 

echo "livre 2 : ";
echo "\n";

//demande a l'utilisateur 
$auteur2 = readline("entrer le nom et prenom de l'auteur : ");
$titre2 = readline("entrez le titre du livre : ");
$prix2 = readline("donnez le prix du titre : ");


//entre dans l'objet 
$livre2 = new Livre($prix2,$titre2,$auteur2);

$auteur2 = $livre2->auteur();

$titre2 = $livre2->titre();

$prix2 = $livre2->prix();


//affiche le resultat 
echo "Le nom et prenom est : [$auteur2] ";
echo "le titre du livre est : [$titre2] ";
echo "le prix est : [$prix2] ";


?>