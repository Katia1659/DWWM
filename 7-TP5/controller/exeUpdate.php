<?php 
include '../modele/DBManagement.php';
session_start();

// déclaration de variable:
$_SESSION['statUpdate'] ="  ";
$id=$_GET['ID'];
$nom=$_GET['NOM'];
$prenom =$_GET['PRENOM'];
$_SESSION['statUpdate']=" Mettre ";

// execution de la function:
$statUpdate = UpdateStagiaires($id,$nom,$prenom);
if ($statUpdate){
    $_SESSION['statUpdate'] ="Liste mise à jour";
}else{
    $_SESSION['statUpdate'] ="  ";
}

header('location:../view/update.php');