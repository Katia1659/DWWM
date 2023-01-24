<?php
include "../modele/function.php";
session_start();

//On récuppère les différentes variables et on créer des $_SESSION
$nom = $_GET['nom'];
$_SESSION ['nom'] = $nom;

$prenom = $_GET['prenom'];
$_SESSION ['prenom'] = $prenom;

$dateNaissance = $_GET['age'];
$sexe = $_GET ['sexe'];
// print_r($_GET);


//On appelle les différentes fonctions
$age = getAgeFromDate($dateNaissance);

$imposable = verifImpotParis($age, $sexe);


//On redirige sur des pages par rapport au résultat des fonctions
if ($imposable == true) {
    header('Location: ../view/imposable.php');
} else {
    header('Location: ../view/nonImposable.php');
}

?>