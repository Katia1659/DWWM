<?php
include '../modele/BDManagement.php';
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nb_modifs = $bdd->exec("DELETE FROM stagiaire WHERE 16");

//recupere le fichier
$recup = $_FILES['file']['tmp_name'];

//met le fichier en tableau
$files = readFileToArray($recup);


//creation des places
$places = array();
for ($i=0; $i < 16 ; $i++) {
    $p = $i + 1;
    $places[$i] = "Place_$p";
}


for ($i=0; $i <count($places) ; $i++) { 
    $files[$i] = $files[$i]." $places[$i]";
}



for ($i = 0; $i < 16; $i++) {
    $val = explode(" ", $files[$i]);
    $temp = [$val[0], $val[1], $val[2]];
    $personnePlace[$i] = $temp;
}


//insert dans la base de donnée
insertStagiaires($personnePlace);
header('location:../view/index.php')
?>