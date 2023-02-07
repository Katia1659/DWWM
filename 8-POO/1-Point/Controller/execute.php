<?php
include_once "../Modele/Point.class.php";


// On initialise les attributs d'abcisse et d'ordonnée
$x=1;
$y=2;

// Instanciation d'un nouvel objet à partir de la classe Point
$pt1 = new Point($x, $y);
$distance = $pt1->norme();

// On affiche la norme des deux points
echo $distance;

// On exécute de la même façon que précédemment
echo "\n";
$x=3;
$y=5;
$pt2 = new Point($x, $y);
$distance = $pt2->norme();
echo $distance;
echo "\n";

// On affiche les attributs de l'objet en fonction de sa classe

// print_r($pt1);
// print_r($pt2);
