<?php
include('../Modele/DBManagement.php');
session_start();
$_SESSION['stag'] = selectStagiaire("SELECT * FROM stagiaire");
header('location:../View/select.php');

?>
        
        