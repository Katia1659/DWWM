<?php

session_start();
include "../Modele/DBManagement.php";
require ('../Modele/functions.php');

$donnees = returnStag ($file);
$_SESSION['STAG']= $donnees;




header('Location: ../View/select.php');