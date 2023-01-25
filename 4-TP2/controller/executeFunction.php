<?php 
include('../modele/function.php');
session_start();
$sexe = $_GET['sexe'];
$age = $_GET['age'];
$age2 = getAgeFromDate($age);
$val = verifImpotParis($age2, $sexe);
$_SESSION['age'] = $age2;
$_SESSION['sexe'] = $sexe;
if ($val == true) {
    header('Location:../view/imposable.php');
} else {
    header('Location:../view/nonimposable.php');
}

?>