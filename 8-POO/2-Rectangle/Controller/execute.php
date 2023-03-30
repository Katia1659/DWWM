<?php

include "../Modele/Rectangle.class.php";

// Demande des données à l'utilisateur
$larg = readline("Insérer la largeur du rectangle : ");

$long = readline("Insérer la longueur du rectangle : ");

// Instanciation de l'objet
$rectangle = new Rectangle($long, $larg);

// Affectation des méthode
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

// Demande des données à l'utilisateur
$largDeux = readline("Insérer la largeur du rectangle : ");

$longDeux = readline("Insérer la longueur du rectangle : ");

$rectangleDeux = new Rectangle($longDeux, $largDeux);

// Affichage du résultat 
$resultat = $rectangleDeux -> afficherRectangle();
if ($carre == true){
    echo "Il s'agit d'un carré";
} else {
    echo "Ce n'est pas un carré";
}


?>