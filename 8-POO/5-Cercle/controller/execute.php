<?php
include_once('../model/Cercle.class.php');
include_once('../model/Point.class.php');

$x = readline("Entrez l'abscisse : ");
$y = readline("Entrez l'ordonée : ");
$r = readline("Entrez le rayon : ");

$cercle1 = new Cercle($x,$y,$r);

$x1 = readline("entrez l'abscisse du point P : ");
$y1 = readline("entrez l'ordonee du point P : ");

$pointP = new Point($x1, $y1);

$cercle1->appartient($pointP);
?>