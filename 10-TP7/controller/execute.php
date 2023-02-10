<?php

include_once "../modele/Employe.class.php";

$matricule = readline("Matricule: ");
$nom = readline("Nom: ");
$prenom = readline ("Prenom: ");
$dateNaissance = readline("Date de naissance (jj/mm/aaaa): ");
$dateEmbauche = readline("Date embauche (jj/mm/aaaa): ");
$salaire = readline("salaire: ");

$employe1 = new Employe($matricule, $nom,$prenom, $dateNaissance, $dateEmbauche, $salaire);

$employe1 -> afficherEmploye();

$employe1 -> age();

$employe1 -> anciennte();

$employe1 -> afficherEmploye1();






