<?php
include ('../modele/Function.php');
session_start();
$_SESSION = placeStagRotate('../modele/Save_Backup/Backup.json');

header('Location:../view/view.php');
?>