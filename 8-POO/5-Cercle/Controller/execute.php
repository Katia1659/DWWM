<?php 
// Liaison des fichiers 
include_once "../modele/Cercle.class.php";


// Demandes des données à l'utilisateur
$x= readline ("Donner l'abscisse du centre : ");
$y= readline ("Donner l'ordonné du centre : ");
$rayon = readline ("Donner le rayon : ");


// Instanciation de l'objet 
$cercle = new Cercle ($x , $y , $rayon);

$cercle -> afficher();

echo "\n";

// Demandes des données à l'utilisateur
$x= readline("X: ");
$y = readline("Y: ");

// Instanciation de l'objet
$point = new Point ($x, $y);


// Utilisation des méthodes pour l'affichage 
$point -> afficher($point);

echo "\n";
$cercle -> appartient($point);



?>

