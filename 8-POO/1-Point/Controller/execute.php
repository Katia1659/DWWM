<?php 
// Inclut le fichier point.class.php 
include_once "../modele/Point.class.php";

// Demande des données à l'utilisateur
echo "Insérer une abscisse: ";
$abs = readline("");
echo "Insérer une ordonnée: ";
$ord = readline("");

// Instanciation de l'objet
$point = new Point($abs, $ord);

//
$point -> getAbs($abs);
$point -> getOrd($ord);

// Affectation de la méthode
$norme = $point -> norme();

// Affichage des résultats
print_r($point);
print_r($norme) 
?>

