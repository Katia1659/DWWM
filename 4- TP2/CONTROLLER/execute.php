<?php
session_start();
include '../MODELE/fonctions.php';
$_SESSION = $_GET;
print_r($_GET);
$age = getAgeFromDate($_GET['dateNaissance']);

// controler la direction selon le résultats :
if (verifImpotParis($age, $_GET['gender']) == true) {
    header('location: ../VIEW/Imposable.php');
} else {
    header('location: ../VIEW/nonImposbale.php');
}
