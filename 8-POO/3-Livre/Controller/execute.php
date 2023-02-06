<?php

include "../Modele/Livre.class.php";

echo "Donner le titre : ";
$titre = readline("");
echo "Donner l'auteur : ";
$auteur = readline("");
echo "Donner le prix : ";
$prix = readline("");

$livreUn = new Livre ($titre, $auteur, $prix);



$dataUn = $livreUn -> afficher();



echo "Donner le titre : ";
$titreDeux = readline("");
echo "Donner l'auteur : ";
$auteurDeux = readline("");
echo "Donner le prix : ";
$prixDeux = readline("");

$livreDeux = new Livre ($titreDeux, $auteurDeux, $prixDeux);

$dataDeux = $livreDeux -> afficherDeux();

?>