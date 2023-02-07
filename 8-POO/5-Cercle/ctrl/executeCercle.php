<?php


include_once "../modele/Cercle.class.php";
include_once "../modele/Point.class.php";

$x = readline("Donner l'abscisse : ");
$y = readline("Donner l'ordonne : ");
$rayon = readline("Donner le rayon : ");


$newCercle= new Cercle($x,$y,$rayon);

$peri = $newCercle->getPerimetre();
$surface = $newCercle->getSurface();

echo "CERCLE(".$x.",".$y.",".$rayon.")"."\n";
echo "Le périmétre est:".$peri."\n";
echo "La surface est : ".$surface."\n";

echo "Donner un point"."\n";
$appartenir = $newCercle->appartient();
echo $appartenir;

$affichage = $newCercle->afficher($xP,$yP);
echo $affichage;