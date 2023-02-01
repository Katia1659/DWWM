<?php
include '../modele/DBManagement.php';
session_start();

$_SESSION['status'] = " ";

$uplodFile = $_FILES['file']['tmp_name'];
$listeUpload = readData($uplodFile);
if (!empty($uplodFile)) {
    foreach ($listeUpload as $key => $value) {
        $status = insertStagiaires($value);
        $_SESSION['status'] = "Ajouter avec seccés";
    }
}else{
    $_SESSION['status'] = " ";
}

header('location:../view/insert.php');

