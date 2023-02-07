<?php

include "../Modele/Livre.class.php";

echo "Livre 1 : " . "\n";

// Demande des données à l'utilisateur
$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner le prix : ");

// Instanciation de l'objet
$livreUn = new Livre ($titre, $auteur, $prix);

// Affichage des résultats
$dataUn = $livreUn -> afficher();


echo "Livre 2 : " . "\n";

// Demande des données à l'utilisateur
$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner le prix : ");

// Instanciation de l'objet
$livreDeux = new Livre ($titre, $auteur, $prix);

// Affichage des résultats
$livre -> afficherDeux();


?>