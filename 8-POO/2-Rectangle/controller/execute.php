<?php

include_once('../modele/Rectangle.class.php');

$longueur = readline("Donner la longueur: ");
$largeur = readline("Donner la largeur: ");

$rectangle = new Rectangle($longueur,$largeur);

$rectangle->afficherRectangle();

