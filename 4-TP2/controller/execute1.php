<?php
include '../modele/functions.php';
session_start();

//CREATION DES SESSIONS ET GET DES INFORMATIONS
$nom = ($_GET['nom']);
$_SESSION['$nom'] = $nom;

$prenom = ($_GET['prenom']);
$_SESSION['$prenom'] = $prenom;

$date = ($_GET['date']);
$_SESSION['$date'] = $date;

$sexe = ($_GET['sexe']);
$_SESSION['$sexe'] = $sexe;

//LANCEMENT DES FONCTIONS 
$age = getAgeFromDate($date);

$imposable = verifImpotParis($age, $sexe);

//ENVOI SUR LES PAGES 'REPONSE'
if ($imposable == true) {
    header('location: ../view/imposable.php');
} else {
    header('location: ../view/nonImposable.php');
}
