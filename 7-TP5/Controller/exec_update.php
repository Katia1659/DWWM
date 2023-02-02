<?php
include '../Model/function.php';
updateStagiaire();
session_start();
$_SESSION['stagiaire'] = selectStagiaire();
header('Location:../View/update.php');

?>