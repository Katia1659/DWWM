<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

session_start();


$nomOuPrenom = $_POST['modif'];
$choixPrenom = $_POST['choix']; 
$modifPrenom = $_POST['replace']; 
$id = $_POST['id']; 


changerInformation($nomOuPrenom, $choixPrenom, $modifPrenom, $id);

header('Location: ../View/index.php');



?>