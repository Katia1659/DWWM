<?php
include "../Model/function.php";
session_start();
deleteStagiaire();
$_SESSION['stagiaire'] = selectStagiaire();


header('Location:../View/delete.php');
?>