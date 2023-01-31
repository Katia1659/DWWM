<?php
include('../Modele/DBManagement.php');
deleteStagiaire();
session_start();
$_SESSION['stag'] = selectStagiaire();
header('location:../View/delete.php');
?>