<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

session_start();


$nomOuPrenom = $_POST['modif']; 
$modifPrenom = $_POST['replace']; 
$id = $_POST['id']; 


changerInformation($nomOuPrenom, $modifPrenom, $id);

header('Location: ../View/index.php');



?>