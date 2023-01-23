<?php
include('../modele/functions.php');
session_start();
$_SESSION['nomsStag'] = placesStagRotate('../modele/Backup.json');
if ($_GET['nom'] == 'class1'){
	header('Location:../view/classe.php');
}elseif ($_GET['nom'] == 'tab1') {
    header('Location:../view/tableau.php');
}
?>