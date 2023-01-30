<?php

function insertStagiaires(array $listStag):String{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag);
    return $status;
}

function selectStagiaires(int $id):String{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "SELECT*FROM stagiaire WHERE id = $id";
    $stmt= $bdd->prepare($sql);
}

function updateStagiaires(String $nom, String $prenom, int $id):String{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "UPDATE*FROM stagiaire SET nom = $nom, prenom = $prenom WHERE id = $id" ;
    $stmt= $bdd->prepare($sql);
}


function deleteStagiaires(int $id):String {
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "DELETE*FROM stagiaire WHERE id = $id";
    $stmt= $bdd->prepare($sql);
}
?>

