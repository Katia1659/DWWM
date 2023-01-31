<?php
include('../Modele/DBManagement.php');
updateStagiaire();
session_start();
$_SESSION['stag'] = selectStagiaire();
header('location:../View/update.php');
?>