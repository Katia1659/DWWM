<?php
include "../model/functions.php";
session_start();
$_SESSION = NULL;
$monMessage =  modeleFunction("KATIA");
$_SESSION['message'] = $monMessage;

header('Location: ../view/affichage.php');
?>