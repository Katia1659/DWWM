<?php 

include_once ('../modele/DBManagement.php');
include "../Modele/functions.php";

session_start();


$supprimer = $_POST['supprimer'];

$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nbmodifs = $bdd->exec("DELETE FROM stagiaire WHERE PLACE='Place_$supprimer';");




header('Location: ../View/index.php');

?>