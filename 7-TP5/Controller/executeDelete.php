<?php
include('../Modele/DBManagement.php');
session_start();
deleteStagiaire();
$_SESSION['stag'] = selectStagiaire();
header('location:../View/delete.php');
?>