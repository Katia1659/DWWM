<?php
include_once "../modele/Point.class.php";

$x = readline("Donner l'abscisse : ");
$y = readline("Donner l'ordonne : ");
$point= new Point($x, $y);

echo "La norme du point ($x,$y) est ". $point->norme();


?>