<?php
require_once '../Modele/DBManagement.php';
session_start();

$status = updateStagiaires($_POST);

if($status) {
    $_SESSION['stagiaires'] = selectStagiaires();
    header('Location: ../View/update.php');
}else {
    echo 'ERREUR';
}
