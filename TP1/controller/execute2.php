<?php
include "../modele/fonctions.php";

session_start();
$_SESSION = NULL;

$monMessage =  modeleFunction("YO, salut");

$_SESSION['message'] = $monMessage;


header('Location: ../view/affichage.php');




?>