<?php
include "../modele/functions.php";
session_start();
$_SESSION = NULL;
$monMessage =  modeleFunction("KATIA");
$_SESSION['message'] = $monMessage;

header('Location: ../view/affichageTest.php');
?>