<?php

include '../Modele/DBManagement.php';
$id = $_GET['ID'];
session_start();

// vérification si l'ID existe pour lancé la fonction:
if ($id) {
    $statDelete = deleteStagiaire($id);
    $_SESSION['statDelete'] = "Deleted !";
} else {
    $_SESSION['statDelete'] = " ";
}


header('location: ../view/delete.php');
