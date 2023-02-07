<?php
include_once "../modele/Livre.class.php";

//Livre 1
echo "Livre 1";
echo "\n";

//On  demande les variables
$titre = readline("Donner le titre: ");
$auteur = readline("Donner l'auteur: ");
$prix = readline("Donner le prix: ");

//On créer l'objet de classe Livre
$livre1 = new Livre($titre, $auteur, $prix);

//On appelle les différentes méthodes
$afficher = $livre1->afficher();
echo $afficher;

//Livre 2 

echo "\n";
echo "\n";
echo "Livre 2";
echo "\n";


$titre = readline("Donner le titre: ");
$auteur = readline("Donner l'auteur: ");
$prix = readline("Donner le prix: ");


//On créer l'objet de classe Livre
$livre2 = new Livre($titre, $auteur, $prix);

//On appelle les différentes méthodes
$afficher = $livre2->afficher();
echo $afficher;

?>