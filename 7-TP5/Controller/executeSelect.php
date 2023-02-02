<?php

include ("../Modele/DBManagement.php");
include ("../Modele/functions.php");

session_start();

$donnees = selectStagiaire();

$_SESSION["donneesStag"] = $donnees;

header('Location: ../View/select.php');