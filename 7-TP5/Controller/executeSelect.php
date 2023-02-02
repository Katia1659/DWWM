<?php

include ("../Modele/DBManagement.php") ;
include ("../Modele/functions.php");

session_start();

$donnees = returnStag();

$_SESSION["donneesStag"] = $donnees;

header('Location: ../View/afficheSelect.php');



?>