<?php

include_once 'functions.php';

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    foreach ($listStag as $key => $value) {

    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($value); }

    return $status;
}
function selectStagiaires():array{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
    $sql = "SELECT * FROM stagiaire";
    $stmt= $bdd->prepare($sql);
    $stmt ->execute();
    $maListe= $stmt->fetchAll();
    return $maListe;
}

function updateStagiaires( int $id, String $choix, String $ancienNom, string $newNom): void{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $bdd->exec("UPDATE stagiaire SET $choix = '$newNom' WHERE $choix = '$ancienNom' and ID = '$id'");
}


function deleteStagiaires(int $id):void {
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $bdd->exec("DELETE FROM stagiaire WHERE id = '$id'");
    
}


function truncateStagiaires():bool {
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "TRUNCATE TABLE stagiaire";
    $stmt= $bdd->prepare($sql);
    $statut = $stmt -> execute();
    return $statut; 
}



