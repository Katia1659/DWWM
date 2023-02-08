<?php 
include_once "../modele/Livre.class.php";


$titre = readline ("Donner le titre : ");
$auteur = readline ("Donner l'auteur : ");
$prix = readline ("Donner le prix : ");

$livre1 = new Livre($titre, $auteur, $prix);
$livre1 -> afficher();

//livre2

$titre = readline ("Donner le titre : ");
$auteur = readline ("Donner l'auteur : ");
$prix = readline ("Donner le prix : ");

$livre2 = new Livre($titre, $auteur, $prix);
$livre2 -> afficher();