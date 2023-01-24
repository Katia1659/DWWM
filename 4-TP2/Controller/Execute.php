<?php
include ('../Modele/Function.php');
session_start();

// $d1 = date_create("2020-05-11");
// $d2 = date_create("2025-05-10");
// $diff = date_diff($d1, $d2);
// echo $diff->format("%y");

// $dateJour = date_create(date("d-m-Y"));
// $d2 = date_create("26-09-2002");
// $diff = date_diff($dateJour, $d2);
// return $diff->format("%y");

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$dateNaiss = $_GET['DateNaiss'];
$age = getAgeFromDate($dateNaiss);
$sexe =$_GET['genre'];
$renvoie = verifImpotParis($age,$sexe);
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
if ($renvoie == True) {
    header('Location:../View/Imposable.php');
}else {
    header('Location:../View/NonImposable.php');
}








?>