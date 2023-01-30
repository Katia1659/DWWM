<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM `stagiaire`');

$donnees = $reponse->fetch();

// while ($donnees = $reponse->fetch())
// print_r($donnees);



session_start();
$_SESSION['nomPlace_1'] = $donnees['NOM']['ID = 9'];

echo $_SESSION['nomPlace_1'];





?>