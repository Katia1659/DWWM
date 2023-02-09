<?php
include_once "../Model/Cercle.class.php";

$x = readline("Donnez l'abcsisse : ");
$y = readline("Donnez l'ordonnée : ");
$r = readline ("Donnez le rayon : ");
$cercle = new Cercle($x,$y,$r);
$affichage = $cercle->affichageCercle();
echo $affichage;
$abcsisse2 = readline("Donnez l'abcsisse : ");
$ordonnee2 = readline("Donnez l'ordonnée : ");
$point = new Point($abcsisse2,$ordonnee2);
$affichage = $point->affichage();
$appartient = $cercle->appartient($abcsisse2,$ordonnee2);
echo $appartient;


?>