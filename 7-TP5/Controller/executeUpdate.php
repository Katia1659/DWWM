<?php
include('../Modele/DBManagement.php');
session_start();
updateStagiaire();
$_SESSION['stag'] = selectStagiaire();
header('location:../View/update.php');
?>