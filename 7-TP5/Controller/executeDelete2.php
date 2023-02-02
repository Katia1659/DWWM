<?php
include "../Modele/DBManagement.php";
require ('../Modele/functions.php');
$status = delete($_POST['id']);
session_start();
if($status){
   $donnees = returnStag ();
    $_SESSION['STAG']= $donnees; 
    header('Location: ../View/delete.php');
}else{
    echo 'ERROR';
}


