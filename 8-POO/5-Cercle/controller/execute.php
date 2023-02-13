
<?php


include_once "../modele/Cercle.class.php";
include_once "../modele/Point.class.php";

$x = readline("Donner l'abscisse : ");
$y = readline("Donner l'ordonne : ");
$rayon = readline("Donner le rayon : ");


$newCercle= new Cercle($x,$y,$rayon);

$peri = $newCercle->getPerimetre();
$surface = $newCercle->getSurface();


echo "Le périmétre est: ".$peri."\n";
echo "La surface est : ".$surface."\n";



$affichage = $newCercle->afficher($x,$y);
echo $affichage;


echo "Donner un point"."\n";
$xP = readline("X = ");
$yP = readline("Y = ");

$appartenir = $newCercle->appartient($xP,$yP);
echo $appartenir;

$newPoint = new Point($xP,$yP);

$afffichage = $newPoint->afficher($xP,$yP);
echo $afffichage;