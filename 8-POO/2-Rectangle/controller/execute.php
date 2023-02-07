<?php
include_once "../modele/Rectangle.class.php";

//On  demande les variables
$longueur = readline("entrer la valeur de la longueur ");
$largeur = readline("entrer la valeur de la largeur ");

//On créer l'objet de classe rectangle
$rec1 = new Rectangle ($longueur, $largeur);

//On appelle les différentes méthodes
$perimetre = $rec1->perimetre();
$aire = $rec1->aire();
$carre = $rec1->estCarre();

//On affiche les résultats des différentes méthodes
echo $perimetre;
echo "\n";
echo $aire;
echo "\n";
if($carre == true){
    echo "c'est un carré";
}else{
    echo "ce n'est pas un carré";
}
echo "\n";


//Rectangle 2 
echo "\n";

//On  demande les variables
$longueur = readline("entrer la valeur de la longueur ");
$largeur = readline("entrer la valeur de la largeur ");

//On créer l'objet de classe rectangle
$rec2 = new Rectangle ($longueur, $largeur);

//On affiche les résultats des différentes méthodes
$afficher = $rec2-> afficherRectangle();
echo $afficher;
?>