<?php

include_once "../Modele/Cercle.class.php";
include_once "../Modele/Point.class.php";

$x = readline ("Donner l'abcisse du centre : ");
$y = readline ("Donner l'ordonnée du centre : ");
$rayon = readline ("Donner le rayon : ");

$cercle = new Cercle ($x, $y, $rayon);

$cercle->afficher();
echo  "\n";
$cercle->getPerimetre(); 
echo "\n";
$cercle->getSurface();
echo "\n";

echo "Donner un point \n";

$abs = readline("X : ");
$ord = readline ("Y : ");

$point = new Point ($abs, $ord);



$cercle->appartient($point);

echo "\n";
