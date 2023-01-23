<?php
include "../modele/functions.php";
session_start();
$_SESSION = NULL;
$monMessage2 =  modeleFunction2("Florian");
$_SESSION['message'] = $monMessage2;

header('Location: ../view/affichageTest.php');
?>