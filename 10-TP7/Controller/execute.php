<?php

include_once '../Modele/Employe.class.php';

// On demande à l'employé de saisir les différentes informations

$matricule = readline("Saisissez votre matricule : ");
$nom = readline("Saisissez votre nom : ");
$prenom = readline("Saisissez votre prénom : ");
$dateNaissance = readline("Saisissez votre date de naissance au format jj/mm/aaaa : ");
$dateEmbauche = readline("Saisissez votre date d'embauche au format jj/mm/aaaa : ");
$salaire = readline("Saisissez votre Salaire : ");
echo "\n \n";

// On instancie un nouvel employé avec les informations saisies précédemment

$employe1 = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

// On affiche les informations de l'employé avant et après augmentation du salaire

$employe1-> afficheEmploye($employe1);

