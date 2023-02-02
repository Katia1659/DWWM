<?php

include_once ('../modele/DBManagement.php');
include_once ('../modele/fonction.php');

session_start();

$donnees = selectStag();

$_SESSION["donneesStag"] = $donnees;

header('Location: ../view/select.php');
?>