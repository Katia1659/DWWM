<?php

include_once "../Modele/Cercle.class.php";
include_once "../Modele/Point.class.php";


// On demande à l'utilisateur l'abcisse et l'ordonnée du centre du cercle, ainsi que le rayon de ce cercle

$x = readline ("Donner l'abcisse du centre : ");
$y = readline ("Donner l'ordonnée du centre : ");
$rayon = readline ("Donner le rayon : ");


// On instancie un nouveau cercle
$cercle = new Cercle ($x, $y, $rayon);

// On affiche les paramètres du cercle, ainsi que son périmètre et sa surface.

$cercle->afficher();
echo  "\n";
$cercle->getPerimetre(); 
echo "\n";
$cercle->getSurface();
echo "\n";

// On demande à l'utilisateur de saisie les coordonnées d'un point 

echo "Donner un point \n";

$abs = readline("X : ");
$ord = readline ("Y : ");

// On instancie un nouveau point 

$point = new Point ($abs, $ord);

// On appelle la méthode appartient(), afin de savoir si le point qu'on vient de créer appartient au cercle ou non

$cercle->appartient($point);

echo "\n";
