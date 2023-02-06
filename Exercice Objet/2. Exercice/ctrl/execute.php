<?php
include_once "../modele/Rectangle.class.php";

$long = readline("\n"."Donner la longueur du rectangle : ");
$larg = readline("Donner la largeur du rectangle: ");

$rectangle = new Rectangle($long, $larg);
$rectangle->afficherRectangle();

