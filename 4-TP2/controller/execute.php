<?php 

include '../modele/functions.php';

session_start();


$nomFamille = $_GET['nomFamille'];
$prenom = $_GET['prenom'];

$dateNaissance = $_GET['datedenaiss'];
$age = getAgeFromDate($dateNaissance);

$sexe = $_GET['gender'];

$verif = verifImpotParis($age,$sexe);

if ($verif == true) {
    $_SESSION ['nomFamille'] = $nomFamille;
    $_SESSION ['prenom'] = $prenom ;
    $_SESSION ['status'] = "imposable";
    header('Location: ../view/impot.php');

} else {
    $_SESSION ['nomFamille'] = $nomFamille;
    $_SESSION ['prenom'] = $prenom ;
    $_SESSION ['status'] = "non imposable";
    header('Location: ../view/impot.php');
}
