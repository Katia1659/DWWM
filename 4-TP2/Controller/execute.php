<?php

include '../Modele/functions.php';
session_start();
// calculer l'age:
$dateNaissance=$_GET['date_naissance'];
$age=getAgeFromDate($dateNaissance);

// vérifier si l'individu est imposable:
    $genre=$_GET['gender'];

    $imposable=verifImpotParis($genre,$age);

    if ($imposable == true) {
        header('Location: ../View/imposable.php');
    }else{
        header('Location: ../View/nonimposable.php');

    }

    $_SESSION['nom']=$_GET['nom'];
    $_SESSION['prenom']=$_GET['prenom'];

?>