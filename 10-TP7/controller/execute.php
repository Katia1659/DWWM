<?php
include_once "../modele/Employe.class.php";

//On demande les variables d'instance
$matricule = readline("Matricule: ");
$nom = readline("Nom: ");
$prenom = readline("Prénom: ");
$dateNaissance = readline("Date de naissance (jj-mm-aaaa): ");
$dateEmbauche = readline("Date d'embauche (jj-mm-aaaa): ");
$salaire = readline("salaire: "); 

//On créer l'objet 
$employeTest = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

//On appelle les différentes méthodes
echo $employeTest->AfficherEmployé();

$employeTest->augmentationDuSalaire();

echo $employeTest->AfficherEmployé();

?>