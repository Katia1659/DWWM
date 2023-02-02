<?php
include_once ('../modele/DBManagement.php');

$supprimer = $_POST['supprimer'];

$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nb_modifs = $bdd->exec("DELETE FROM `stagiaire` WHERE `PLACE`='Place_$supprimer';");


header('Location: ../controller/refreshDelet.php');
?>