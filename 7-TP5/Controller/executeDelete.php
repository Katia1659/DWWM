<?php

session_start();
include "../Modele/DBManagement.php";
require ('../Modele/functions.php');
unset($_SESSION);
// Partie 1


$donnees = returnStag ($file);
$_SESSION['STAG']= $donnees;



header('Location: ../View/delete.php');