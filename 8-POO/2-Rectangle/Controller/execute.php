<?php

include "../Modele/Rectangle.class.php";

echo "Insérer la largeur du rectangle : ";
$larg = readline("");
echo "Insérer la longueur du rectangle : ";
$long = readline("");

$rectangle = new Rectangle($long, $larg);


$perimetre = $rectangle -> perimetre();
echo "\n";
$surface = $rectangle -> aire();
echo "\n";
$carre = $rectangle -> estCarre();
if ($carre == true){
    echo "Il s'agit d'un carré";
} else {
    echo "Ce n'est pas un carré";
}



echo "\n";

echo "Insérer la largeur du rectangle : ";
$largDeux = readline("");
echo "Insérer la longueur du rectangle : ";
$longDeux = readline("");

$rectangleDeux = new Rectangle($longDeux, $largDeux);

$resultat = $rectangleDeux -> afficherRectangle();
if ($carre == true){
    echo "Il s'agit d'un carré";
} else {
    echo "Ce n'est pas un carré";
}


?>