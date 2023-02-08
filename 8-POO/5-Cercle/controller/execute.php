<?php
include "../modele/Cercle.class.php";

//Créeation du cercle:
$x=readline("Donner l'abscisse du centre: ");
$y=readline("Donner l'ordonné du centre: ");
$rayon= readline("Donner le rayon: ");

$cercle= new Cercle($x,$y,$rayon);

// Affichage du Cercle:
$cercle->afficher();

// creation du point
$xp = readline("Donner l'abscisse d'une point: ");
$yp =  readline("Donner l'ordonné d'une point: ");

$point= new Point($xp,$yp);

// Affichage du point:
$point->afficher();
echo PHP_EOL;

// Vérification si le point apartien au cercle:
$cercle->appartient($point);
