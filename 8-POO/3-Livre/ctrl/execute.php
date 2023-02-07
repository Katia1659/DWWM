<?php
include_once "../modele/Livre.class.php";

echo "livre 1"."\n";
echo "Donnez le titre:";
$nomTitre = readline("");
echo "Donnez l'auteur: ";
$nomAuteur = readline("");
echo "Donnez le prix: ";
$nbPrix = readline("");

$livre = new Livre($nomTitre, $nomAuteur, $nbPrix);

$livre->setTitre($nomTitre);
$livre->setAuteur($nomAuteur);
$livre->setPrix($nbPrix);

$afficherLivre = $livre->afficherLivre();
echo $afficherLivre;

//livre 2
echo "\n"."livre 1"."\n";
echo "Donnez le titre:";
$nomTitre = readline("");
echo "Donnez l'auteur: ";
$nomAuteur = readline("");
echo "Donnez le prix: ";
$nbPrix = readline("");

$livre = new Livre($nomTitre, $nomAuteur, $nbPrix);

$livre->setTitre($nomTitre);
$livre->setAuteur($nomAuteur);
$livre->setPrix($nbPrix);

$afficherLivre = $livre->afficherLivre();
echo $afficherLivre;

?>