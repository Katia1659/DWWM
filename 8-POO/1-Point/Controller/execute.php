<?php 
// Inclut le fichier point.class.php 
include_once "../modele/Point.class.php";

// Demande des données à l'utilisateur

$abs = readline("Insérer une abscisse: ");

$ord = readline("Insérer une ordonnée: ");

// Instanciation de l'objet
$point = new Point($abs, $ord);

//
$point -> getAbs();
$point -> getOrd();

// Affectation de la méthode
$norme = $point -> norme();

// Affichage des résultats
print_r($point);
print_r($norme) 
?>

