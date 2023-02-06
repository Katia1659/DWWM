<?php


include_once "../modele/Rectangle.class.php";


$longeur = readline("Donner la longueur du rectangle : ");
$largeur = readline("Donner la largeur du rectangle : ");

$newRectangle = new Rectangle($longeur,$largeur);

$peri = $newRectangle -> perimetre();
echo "Le périmétre est $peri"."\n";

$surface = $newRectangle -> aire();
echo "L'aire est $surface"."\n";

$show = $newRectangle -> afficherRectangle();
echo $show;