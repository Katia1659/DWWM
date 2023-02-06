<?php
include_once "../modele/Personne.class.php";

$moussa = new Personne();
$moussa->nom = "Toto";
$moussa->prenom = "Luc";
print_r($moussa);

?>