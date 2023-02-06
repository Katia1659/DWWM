<?php
include_once "../modele/Personne2.class.php";

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$dateNaiss = $_GET['dateNaiss'];


$titi = new Personne("Toto", "Lucas", "06/02/2023");
$greg = new Personne($nom, $prenom, $dateNaiss);
print_r($titi);
print_r($greg);

?>