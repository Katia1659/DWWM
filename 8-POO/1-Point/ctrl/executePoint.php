<?php


include_once "../modele/Point.class.php";


$abscisse = readline("Donner l'abscisse : ");
$ordonne= readline("Donner l'ordonne : ");

//Initialisation d'un nouveau point
$newPoint = new Point($abscisse,$ordonne);

//Appel de la méthode norme
$norme = $newPoint -> norme($abscisse,$ordonne);


echo "La norme du point($abscisse,$ordonne) est: $norme"."\n";
