<?php
include_once "../modele/Personne.class.php";
$longueur = 3;
$largeur = 4;
echo "Rectangle 1";
$rect1 = new Rectangle ($longueur, $largeur);
$rect1->perimetre();
$rect1->aire();
$rect1->estCarre();
$rect1->afficherRectangle();
$rect2 = new Rectangle ($longueur, $largeur);
echo "Rectangle 2";
$rect2-> setLongueur(5);
$rect2-> setLargeur(5);
$rect2->perimetre();
$rect2->aire();
$rect2->estCarre();
$rect2->afficherRectangle();
