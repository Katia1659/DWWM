<?php


include_once "../modele/Livre.class.php";


$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner le prix : ");

//Creation nouveau livre
$newLivre = new Livre($titre, $auteur, $prix);

//Appel fonction afficher
$livre = $newLivre -> afficher();
