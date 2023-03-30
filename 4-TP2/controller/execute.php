<?php 

include_once ('../modele/function.php'); 

session_start();

$age = $_GET['user_age']; 
$sexe = $_GET['sexe'];
$name = $_GET['user_name'];
$prenom = $_GET['user_prenom'];

$naissance = getAgeFromDate ($age);

$statut = verifImpotParis ($naissance, $sexe);

echo $naissance;

if ( $statut == true ) {
   header('Location: ../view/imposable.php' );
} elseif ( $statut == false ) {
    header('Location: ../view/nonImposable.php' );
}


$_SESSION['$user_name'] = $name;
$_SESSION['$user_prenom'] = $prenom;

?>