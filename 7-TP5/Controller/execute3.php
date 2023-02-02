<?php
include_once ("../Modele/DBManagement.php");
include_once ("../Modele/functions.php");


$place = $_POST['place'];


deleteStagiaires($place); 

header('Location: ../View/index.php');