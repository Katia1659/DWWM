<?php

include_once "../Modele/Livre.class.php";

// On demande à l'utilisateur combien de livres il souhaite afficher

$nbreLivre = readline("Saisissez le nombre de livres que vous voulez ajouter : ");

// On crée une boucle for qui affiche les caractéristiques du livre, en fonction du nombre de livres à ajouter

for ($i = 1; $i <= $nbreLivre; $i++) {

echo "Livre $i : \n ";

$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner le prix : ");

// Instanciation d'un objet livre à chaque tour de boucle 

$livre[$i] = new Livre ($titre, $auteur, $prix);

$message = $livre[$i]->afficher();

echo $message;

}

// echo "Livre 2 : \n ";

// $titre = readline("Donner le titre : ");
// $auteur = readline("Donner l'auteur : ");
// $prix = readline("Donner le prix : ");

// $livre2 = new Livre ($titre, $auteur, $prix);

// $message = $livre2->afficher();

// echo $message;


