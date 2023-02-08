<?php
include_once "../modele/Rectangle.class.php";

echo "Donnez longueur: ";
$nbLongueur = readline("");
echo "Donnez largeur: ";
$nbLargeur = readline("");

$rectangle = new Rectangle($nbLongueur, $nbLargeur);

$rectangle->setLongueur($nbLongueur);
$rectangle->setLargeur($nbLargeur);

$perimetre = $rectangle->perimetre();
$aire = $rectangle->aire();
$estCarre = $rectangle->estCarre();

echo "le périmetre est ".$perimetre."\n";
echo "la surface est ".$aire."\n";

if ($estCarre == false) {
    echo "Ce n'est pas un carré"."\n";
}else{
    echo "c'est un carré"."\n";
}

echo "Donnez longueur: ";
$nbLongueur = readline("");
echo "Donnez largeur: ";
$nbLargeur = readline("");

$rectangle->setLongueur($nbLongueur);
$rectangle->setLargeur($nbLargeur);

$estCarre = $rectangle->estCarre();

echo $estCarre;


?>
