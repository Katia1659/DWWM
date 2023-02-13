<?php

include_once "../modele/Emplye.class.php";


//  définition des variable d'instance par l'utiusateur;
$matric = readline("Matricule:  ");
$nom = readline("Nom: ");
$prenom = readline("Préom: ");
$datnaiss= readline("Date de Naissance (aaaa/mm/jj): ");
$datembauche = readline("Date Embauche (aaaa/mm/jj): ");
$sal= readline("Salaire : ");

// Instanciation de l'objet Employer
$employer= new Employe($matric,$nom,$prenom,$datnaiss,$datembauche,$sal);

$employer->afficherEmploye();
