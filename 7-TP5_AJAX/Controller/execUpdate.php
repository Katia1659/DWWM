<?php
require_once '../Modele/DBManagement.php';
session_start();
//Update les stagiaires
if(isset($_POST['action'])){
    $status = updateStagiaires();
    if ($status){
        echo 0;
        $_SESSION['stagiaires'] = selectStagiaires();
    }else{
        echo 1;
    }
}

