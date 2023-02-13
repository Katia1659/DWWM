<?php
include_once "../modele/Etudiant.class.php";
$id = 1;
$nom = readline("Donner le nom : ");
$prenom = readline("Donner le prenom : ");
$dateNaissance = readline("Donner la date de naissance : ");
$nom1 = new Etudiant($id, $nom, $prenom, $dateNaissance);

echo $nom1;
echo $Filiere

?>
