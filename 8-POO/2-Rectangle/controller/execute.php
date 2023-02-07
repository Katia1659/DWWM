<?php
require_once '../modele/Rectangle.class.php';
// Demande a l'utilisateur le nombre de rectangle
echo 'Combien de rectangle ? : ';
$nbrRectangle = readline();

//Boucle qui demande la longueur et la largeur des rectangles.
for ($i = 1; $i <= $nbrRectangle; $i++){
    echo 'Quelles unité de mesure ? : ';
    $uniteMesure = readline();
    $rectangle = "rectangle$i";
    echo "Mettez longueur du $rectangle : ";
    $longueur = readline();
    echo "Mettez largeur du $rectangle: ";
    $largeur = readline();
    $$rectangle = new Rectangle($longueur, $largeur, $uniteMesure);
    $$rectangle->afficherRectangle($rectangle);
}





