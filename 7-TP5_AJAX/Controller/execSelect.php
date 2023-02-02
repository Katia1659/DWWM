<?php
require_once '../Modele/DBManagement.php';
session_start();
//Renvoie la liste des stagiaires via la session
if(isset($_POST['action'])) {
    if ($_POST['action'] == 'select'){
        $_SESSION['stagiaires'] = selectStagiaires();
        echo 0;
        header('Location: ../View/select.php');
    }if ($_POST['action'] == 'update'){
        $_SESSION['stagiaires'] = selectStagiaires();
        echo 0;
        header('Location: ../View/update.php');
    }if ($_POST['action'] == 'delete'){
        $_SESSION['stagiaires'] = selectStagiaires();
        echo 0;
        header('Location: ../View/delete.php');
    }

}
