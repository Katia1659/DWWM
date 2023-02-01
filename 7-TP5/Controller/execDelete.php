<?php
require_once '../Modele/DBManagement.php';
session_start();

$status = deleteStagiaires($_POST);

if ($status) {
    $_SESSION['stagiaires'] = selectStagiaires();
    header('Location: ../View/delete.php');
}else {
    echo 'ERREUR';
}
