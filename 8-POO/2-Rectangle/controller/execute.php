<?php
include_once "../modele/Rectangle.class.php";

//demander la longeur et la largeur
$longueur = readline("donne la longeur :");
$largeur = readline("donne la largeur :");


$taille = new Rectangle($longueur,$largeur);
$perimetre = $taille->perimetre();
echo $perimetre;
echo "\n";
$aire = $taille->aire();
echo $aire;
echo "\n";
$carre = $taille->estCarre();

if ($carre == true) {
    echo "ceci est un carre";
}else {
    echo "ce n'est pas un carre";
}
echo "\n";echo "\n";


echo "Rectangle 2";
echo "\n";
echo "\n";
$longueur = readline("donner la longeur du rectangle 2 :");
$largeur = readline("donner la largeur du rectangle 2 :");
$carre2 = new Rectangle($longueur,$largeur);
$perimetre = $carre2->perimetre();
$aire = $carre2->aire();
$carre = $carre2->estCarre();
//echo $perimetre;
//echo "\n";
$resul = $carre2->afficherRectangle();
echo $resul;
echo "\n";

?>