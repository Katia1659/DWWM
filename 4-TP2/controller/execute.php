<?php

//inclusion de la page fonction 
include ('../model/functions.php');
session_start();

//recuperation d'info
$age = $_GET['date_naiss'];
$sexe = $_GET['sexe'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];


//nom et prenom
$_SESSION ['nom'] = $nom;
$_SESSION ['prenom'] = $prenom;


//appel de fonctions
$age = getAgeFromDate($age);
$isImposable = verifImpotParis($age, $sexe);


//redirection page imposable ou non
if ($isImposable == true) {
    header ('location: ../view/imposable.php');
}else {
    header('location: ../view/nonImposable.php');
}



?>