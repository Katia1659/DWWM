<?php
include_once "../modele/Personne2.class.php";


$nom = "Anthony";
$prenom = "Canipel";
$dateNaiss = "20/06/2002";
$adresse = "11 rue des murets";

$titi = new Personne($prenom, $nom, $dateNaiss, $adresse);
print_r($titi);

?>