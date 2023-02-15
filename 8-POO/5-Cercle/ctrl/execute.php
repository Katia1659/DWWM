<?php
include "../modele/Cercle.class.php";

$x=readline("Donner l'abscisse du centre: ");
$y=readline("Donner l'ordonné du centre: ");
$rayon= readline("Donner le rayon: ");

$cercle= new Cercle($x,$y,$rayon);

$cercle->afficher();



$xp = readline("Donner l'abscisse d'une point: ");
$yp =  readline("Donner l'ordonné d'une point: ");

$point= new Point($xp,$yp);

$point->afficher();
echo PHP_EOL;


$cercle->appartient($point);
