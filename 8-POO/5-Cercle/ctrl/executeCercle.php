<?php

include 'Cercle.class.php';

//Initialisation du centre
$x = readline("Donner l'abscisse : ");
$y = readline("Donner l'ordonne : ");
$rayon = readline("Donner le rayon : ");


$newCercle= new Cercle($x,$y,$rayon);

$peri = $newCercle->getPerimetre();
$surface = $newCercle->getSurface();

//Affiche coordonnées du centre + rayon
$affichage = $newCercle->afficher();
echo $affichage;

//Initialisation du point P
echo "Donner un point"."\n";
$xP = readline("X = ");
$yP = readline("Y = ");

//point P appartient au cercle ?
$newPoint = new Point($xP,$yP);
$appartenir = $newCercle->appartient($newPoint);
echo $appartenir;


//Affichage coordonnées du point P
$afffichage = $newPoint->afficher($xP,$yP);
echo $afffichage;
