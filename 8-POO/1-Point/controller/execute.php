<?php
include_once "../modele/Point.class.php";

//$abscisse = 1;
//$ordonne = 2;

//initialisation des varaible a donner 
echo "Donnez l'abscisse: ";
$nbAbscisse = readline("");
echo "Donnez l'ordonner: ";
$nbOrdonnee = readline("");

// instanciation de l'objet class
$point = new Point($nbAbscisse, $nbOrdonnee);
 
$point->setAbscisse($nbAbscisse);
$point->setOrdonne($nbOrdonnee);

//on appelle la method "norm"
$norm =$point->Norm();

echo "le norme du point (".$nbAbscisse.",".$nbOrdonnee.") est:";
print_r($norm);
?>
