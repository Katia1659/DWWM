<?php

include_once '../modele/Employe.class.php';

$matricule = readline("Matricule : ");
$nom = readline("Nom : ");
$prenom = readline("Prenom : ");
$dateNaissance = readline("Date de naissance (aaaa/mm/jj) : ");
$dateEmbauche = readline("Date embauche (aaaa/mm/jj) : ");
$salaire = readline("Salaire : ");

$newEmploye = new Employe($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$salaire);

$age = $newEmploye->age($dateNaissance);
$anciennete = $newEmploye->anciennete($dateEmbauche);
$augmentationDuSalaire = $newEmploye->augmentationDuSalaire($dateEmbauche);

$afficherEmploye = $newEmploye->afficherEmploye($dateEmbauche,$dateNaissance);
echo $afficherEmploye;
