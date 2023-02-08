<?php

include('../model/Cercle.class.php');


//on demande a l'utilisateur les coordonées du cercle a creer
//abscisse
$x = readline("Donner l'abscisse du centre : ");
//ordonné
$y = readline("Donner l'ordonné du centre : ");
//rayon
$r = readline("Donner le rayon : ");
//on crée le cercle
$cercle1 = new Cercle($x,$y,$r);

//on affiche le cercle
$cercle1->afficher();
//on calcul le perimetre et la surface a l'aide des methodes 
$perimetre = $cercle1->getPerimetre();
$surface = $cercle1->getSurface();
//on affiche le resultat
echo PHP_EOL."Le périmètre est : $perimetre".PHP_EOL;
echo "La surface est : $surface".PHP_EOL;

//on demande a l'utilisateur d'entrer les coordonnées d'un point 
echo "Donner un point :" . PHP_EOL;
$x1 = readline("X : ");
$y1 = readline("Y : ");
//on crée le point
$pointP = new Point($x1, $y1);
//on affiche le point
$pointP->afficherPoint();
echo PHP_EOL;
//on verifie si le point appartient au cercle
$cercle1->appartient($pointP);
?>