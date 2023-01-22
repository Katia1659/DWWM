<?php
include "../modele/functions.php";
session_start();
$_SESSION = NULL;
$monMessage =  modeleFunction("KATI0");
$monMess = modeleFunction("P4UL");
$_SESSION['message'] = $monMessage;
$_SESSION['mess'] = $monMess;

header('Location: ../view/affichage.php');
?>