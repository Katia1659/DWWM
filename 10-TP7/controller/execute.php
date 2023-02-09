<?php
require_once "../modele/Employe.class.php";

//Saisie de l'employe 1


$matricule = readline("Votre matricule : ");
$nom = readline("Votre nom : ");
$prenom = readline("Votre Prénom: ");
$dateNaissance = readline("Votre date de naissance  (JJ/MM/YYYY): ");
$dateEmbauche = readline("Votre date d'embauche  (JJ/MM/YYYY): ");
$salaire = readline("Mettez votre salaire  : ");


$e1 = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);
//Affichage et augmentation de l'employé 1
$e1->afficherEmploye();
$e1->augmentationDuSalaire();
$e1->afficherEmploye();


//Saisie de l'employe 2
$matricule = readline("Votre matricule : ");
$nom = readline("Votre nom : ");
$prenom = readline("Votre Prénom: ");
$dateNaissance = readline("Votre date de naissance  (JJ/MM/YYYY): ");
$dateEmbauche = readline("Votre date d'embauche  (JJ/MM/YYYY): ");
$salaire = readline("Mettez votre salaire  : ");


$e2 = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);
//Affichage et augmentation de l'employé 2
$e2->afficherEmploye();
$e2->augmentationDuSalaire();
$e2->afficherEmploye();


//Saisie de l'employe 3
$matricule = readline("Votre matricule : ");
$nom = readline("Votre nom : ");
$prenom = readline("Votre Prénom: ");
$dateNaissance = readline("Votre date de naissance  (JJ/MM/YYYY): ");
$dateEmbauche = readline("Votre date d'embauche  (JJ/MM/YYYY): ");
$salaire = readline("Mettez votre salaire  : ");

$e3 = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);
//Affichage et augmentation de l'employé 3
$e3->afficherEmploye();
$e3->augmentationDuSalaire();
$e3->afficherEmploye();
