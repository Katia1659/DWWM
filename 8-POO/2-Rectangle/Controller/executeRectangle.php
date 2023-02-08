<?php
include_once "../modele/Rectangle.class.php";

/*POUR LE RECTANGLE*/
echo "Rectangle 1 :\n";
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$long = readline("Donner la longueur : ");
$larg = readline("Donner la larger : ");

/*CREACTION DE L'OBJET*/
$rectangle1 = new  Rectangle($long, $larg);
echo $rectangle1->afficherRectangle();

echo "Rectangle 2 :\n";
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$long = readline("Donner la longueur : ");
$larg = readline("Donner la larger : ");

/*CREACTION DE L'OBJET*/
$rectangle2 = new  Rectangle($long, $larg);
echo $rectangle2->afficherRectangle();
?>
