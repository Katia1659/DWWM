<?php
require_once '../Modele/DBManagement.php';
session_start();

//Delete les stagiaires
if(isset($_POST['action'])){
    $status = deleteStagiaires();
    if ($status){
        $_SESSION['stagiaires'] = selectStagiaires();
        $response = [
            "message" => 'Success'
        ];
        echo 0;
    }else{
        $response = [
            "message" => 'Error'
        ];
        echo 1;
    }
}
