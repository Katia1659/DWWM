<?php 

include_once "../Modele/Rectangle.class.php";

$longueur = 3;
$largeur = 4; 

// Instanciation d'un nouvel objet à partir de la classe
$rectangle1 = new Rectangle($longueur, $largeur);

// On appelle la méthode afficherRectangle qui affiche les caractéristiques du rectangle

$message = $rectangle1->afficherRectangle();


echo $message;

// On instancie un nouvel objet et on répète l'action précédente

$longueur = 5;
$largeur = 5; 
$rectangle2 = new Rectangle($longueur, $largeur);

$message = $rectangle2->afficherRectangle();