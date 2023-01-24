<?php

include "../modele/functions.php";

session_start();
$sexe=$_GET['genre'];
$dateDeNaiss=$_GET['date_naiss'];
$age = getAgeFromDate($dateDeNaiss);



// $date = getAgeFromDate($dateDeNaiss);


$impot = verifImpotParis($age,$sexe);
if ($impot == true) {
    header('Location: ../view/get1.php');
}else {
    header('Location: ../view/get2.php');
}


?>