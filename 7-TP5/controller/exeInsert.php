<?php
include '../modele/DBManagement.php';
session_start();
deleteAll();
$_SESSION['status'] = " ";

$uplodFile = $_FILES['file']['tmp_name'];

// readData fonction déclaré sur Functions.php : lis le fichier et le transforme en tableaux de 16 tableaus avec le format (nom,prenom,place)! 
$listeUpload = readData($uplodFile);
// vérification si le fichier n'est pas vide pour executer un foreache qui execute la fonction:
if (!empty($uplodFile)) {
    foreach ($listeUpload as $key => $value) {
        $status = insertStagiaires($value);
        $_SESSION['status'] = "Ajouter avec seccés";
    }
}else{
    $_SESSION['status'] = " ";
}

header('location:../view/insert.php');

