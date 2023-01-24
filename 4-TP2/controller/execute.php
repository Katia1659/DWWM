<?php
require('../model/functions.php');
session_start();
$nom = $_GET['nom'];
//$nom = "Julien";
$prenom = $_GET['prenom'];
//$prenom = "Julien";
$age = $_GET['date'];
//$age = "1997-05-24";
$gender = $_GET['gender'];
//$gender = 'femme';
$age = calculAge($age);
$situation = verifImpot($age, $gender);
$_SESSION['situation'] = $situation;
$_SESSION['prenom'] = $prenom;
$_SESSION['nom'] = $nom;
header("Location: ../view/imposable.php")
?>