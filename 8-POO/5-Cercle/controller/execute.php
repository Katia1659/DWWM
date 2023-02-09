<?php
include_once("../modele/cercle.class.php");
include_once("../modele/point.class.php");

$abs = readline("donnez l'abscisse du point : ");
$ord = readline("donnez l'ordonne du point : ");
$rayon = readline("donnez le rayon : ");

$cercle = new Cercle($abs, $ord, $rayon);
echo "le perimetre est : ";
echo $cercle->calculPerim();
echo PHP_EOL;
echo "la surface est : ";
echo $cercle->calculSurface();
echo PHP_EOL;

//point 

echo "donner un point :".PHP_EOL;
$x =readline("X : ");
$y =readline("Y : ");

//  $pointP = new Point($x,$y);

 

$cercle -> appartient($x, $y);



// $c1 = new Cercle(1, 2, 3);

// //echo $c1->get_centre()->getAbcisse();

// $pt1 =  $c1->get_centre();
// echo $pt1->norme();


?>