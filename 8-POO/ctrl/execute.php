<?php
include_once "../modele/Point.class.php";
include_once "../modele/Rectangle.class.php";
include_once "../modele/Livre.class.php";


//POUR LE POINT 
// $abs = readline("Donner l'abscisse : ");
// $ord = readline("Donner l'ordonnée : ");

// $p1 = new Point($ord, $abs);
// echo $p1->norme();
// PHP_EOL;



//POUR LE RECTANGLE
// $long = readline("Donner la longueur : ");
// $larg = readline("Donner la larger : ");

// //CREACTION DE L'OBJET
// $rectangle1 = new  Rectangle($long, $larg);

// echo $rectangle1 -> afficherRectangle()



// POUR LE LIVRE
$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner prix : ");

$Livre1 = new Livre ($titre, $auteur, $prix);

echo $Livre1 -> afficher();



?>
