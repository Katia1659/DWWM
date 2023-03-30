<?php 
include_once "../Modele/Employe.class.php";

// Demande des données a l'utilisateur

$matricule = readline("Quel est le matricule : ");

$nom = readline("Quel est le nom de l'employé : ");

$prenom = readline("Quel est le prenom de l'employé : ");

$dateNaissance = readline("Quel est la date de naissance de l'employé (jj/mm/aaaa) : ");

$dateEmbauche = readline("Quel est la date date d'embauche de l'employé (jj/mm/aaaa) : ");

$salaire = readline("Quel est le salaire de l'employé : ");

// Instanciation de l'objet 
$emp = new Employe ($matricule, $nom , $prenom, $dateNaissance , $dateEmbauche, $salaire);

// utilisation des methodes 
$emp -> age();

$emp -> anciennete();

$emp -> augmentationDuSalaire();

$emp -> afficherEmploye();


?>