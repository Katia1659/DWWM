<?php


$place = $_POST['place'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];


$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nb_modifs = $bdd->exec("UPDATE `stagiaire` SET `NOM`='$nom',`PRENOM`='$prenom' WHERE `PLACE`='Place_$place';");

    header('Location: ../controller/refreshUpdate.php');
?>

