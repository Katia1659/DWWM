<?php

include '../Modele/DBManagement.php';
$id = $_GET['ID'];
session_start();



if ($id) {
    $statDelete = deleteStagiaire($id);
    $_SESSION['statDelete'] = "Deleted !";
} else {
    $_SESSION['statDelete'] = " ";
}


header('location: ../view/delete.php');
