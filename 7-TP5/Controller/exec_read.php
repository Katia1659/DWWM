<?php
include '../Model/function.php';
session_start();
$_SESSION['stagiaire'] = selectStagiaire();
header('Location:../View/read.php');

?>