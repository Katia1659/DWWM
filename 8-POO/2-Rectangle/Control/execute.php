<?php
include_once "../Model/Rectangle.class.php";

//On demande les valeurs des différents paramètres liée à la class rectangle, la boucle for permet de l'éxécuté 2 fois de suite comme demander dans l'exercice.
for ($i=1; $i <=2 ; $i++) { 
    $rectangle = "rectangle_$i";
    $longueur = readline("Donnez la longueur du rectangle $i : ");
    $largeur = readline("Donnez la largeur du rectangle $i : ");
    $$rectangle = new Rectangle($longueur,$largeur);
    $affichage = $$rectangle->afficherRectangle();;
    echo "$affichage \n";
}
?>