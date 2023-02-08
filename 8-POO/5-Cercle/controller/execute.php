<?php
include_once "../modele/Cercle.class.php";
include_once "../modele/Point.class.php";

//creation de readline pour definir l'ordonné et de l'abscisse
$ordonne = readline("Donner l'ordonné du centre : ");
$abscisse = readline("Donner l'abscisse du centre : ");
$rayon = readline("Donner le rayon : ");

//creation de l'objet cercle
$cercle = new Cercle($abscisse, $ordonne, $rayon);

$cercle->afficher();

//creation d'un objet point
$point = new Point(readline("x: "), readline("y: "));

$cercle -> appartient($point);



?>