<?php

include "../Modele/DBManagement.php";
require ('../Modele/functions.php');


// Partie 2 UPDATE
$status = false;
for ($i=0; $i <17; $i++) {
    
    # code...
    $nom[$i] = $_GET["nom".$i];
    if ($nom[$i] !="")
    $status = updateNom($nom[$i],$i);
    
    $prenom[$i] = $_GET["prenom".$i];
    if ($prenom[$i] !="")
    $status = updatePrenom($prenom[$i],$i);
    
    $place[$i] = $_GET["place$i"];
    if ($place[$i] !="")
    $status = updatePlace($place[$i],$i);
    
};

// Partie 3


$donnees = returnStag ();
$_SESSION['STAG']= $donnees; 
    
header('Location: ../View/update.php');

?>