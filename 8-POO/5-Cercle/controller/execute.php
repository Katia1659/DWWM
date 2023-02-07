<?php
include_once "../modele/CerclePoint.class.php";
$x = readline("Donner l'abcisse du centre :");
$y = readline ("Donner l'ordonné du centre : ");
$rayon = readline ("Donner le rayon : ");
$cercle = new Cercle($x,$y,$rayon);
$cercle-> setX($x);
$cercle->setY($y);
$cercle->setRayon($rayon);
$cercle->afficher();
$cercle->getPerimetre();
$cercle->getSurface();
Echo "Donner un point :";
$x = readline("X :");
$y = readline("Y :");
$point = new Point($x,$y);
$point-> afficher();
$cercle-> dansLeCercle($x,$y);