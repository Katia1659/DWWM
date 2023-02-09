<?php

include_once "../modele/Cercle.class.php";
include_once "../modele/Point.class.php";

//=================== Cercle ===================

//On  demande les variables
$x = readline("Donner l'abscisse du centre: ");
$y = readline("Donner l'ordonné du centre: ");
$rayon = readline("Donner le rayon: ");

//On créer l'objet
$cercle = new Cercle($x, $y, $rayon);

//On appelle les différentes méthodes
echo $cercle->getPerimetre();
echo "\n";
echo $cercle->getSurface();
echo "\n";
echo $cercle->afficher();
echo "\n";

//=================== Point ===================
echo "\n";
echo "Donner un point: ";
echo "\n";

//On  demande les variables
$x = readline("X: ");
$y = readline("Y: ");

$point = new Point($x, $y);

//On appelle les différentes méthodes
echo $point->afficher();

//=================== Point dans le Cercle? ===================
echo "\n";
echo "\n";
echo $cercle->appartient($point->getX(), $point->getY());

?>