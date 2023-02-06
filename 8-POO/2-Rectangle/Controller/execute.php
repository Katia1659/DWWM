<?php
include_once "../Modele/Rectangle.class.php";

//on demande a l'utilisateur les coordonnés d'un point
$longueur = readline("Entrez la longueur : ");
$largeur = readline("Entrez la largeur : ");

//on crée le point
$rectangle = new Rectangle ($longueur,$largeur);
//on appelle la norme
$perimetre = $rectangle->perimetre();
$aire = $rectangle->aire();

//on affiche le resultat
$texte = afficherCarre();


?>