<?php
session_start();
include '../MODELE/fonctions.php';

// Variables:
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$dateNaissance = $_GET['dateNaissance'];
$gendre = $_GET['gender'];

// getAge :
$age = getAgeFromDate($dateNaissance);

// controler la direction selon le résultats :
$imposable = verifImpotParis($age, $gendre);
if ($imposable == true) {
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    header('location: ../VIEW/Imposable.php');
} else {
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    header('location: ../VIEW/nonImposbale.php');
}
