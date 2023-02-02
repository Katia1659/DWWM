<?php

session_start();
include "../Modele/DBManagement.php";
require ('../Modele/functions.php');

// Partie 1

$donnees = returnStag ($file);
$_SESSION['STAG']= $donnees;




header('Location: ../View/update.php');