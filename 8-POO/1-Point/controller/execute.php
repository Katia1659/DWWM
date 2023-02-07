<?php
include_once "../modele/Point.class.php";

//test
// $test = new Point(1, 2);
// $normeTest = $test->Norme ();
// print_r($test);
// print_r($normeTest);

//=============================== début exo ===============================

//On demande les coordonnées du repère orthonormé
$abscisse = readline("Donner l'abscisse: ");
echo "\n";
$ordonnee = readline("Donner l'ordonnée: ");
echo "\n";

//On crée un objet de classe Point
$point1 = new Point ($abscisse, $ordonnee);

//On appelle la méthode Norme au sein de l'objet
$normePoint1 = $point1->Norme ();

echo "La nome du point (". $abscisse. ", ". $ordonnee. ") est: ".  $normePoint1;
?>