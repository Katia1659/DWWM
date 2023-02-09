<?php

include "../modele/Rectangle.class.php";


echo "rectangle 1 ";

//demande a l'utilisateur
$lar = readline("donner la largeur du rectangle : ");

$lon = readline("donner la longueur du rectangle : ");

// entre dans l'objet
$rec = new Rectangle($lon, $lar);

//affiche le resultat 
echo $rec->afficherRectangle();











?>