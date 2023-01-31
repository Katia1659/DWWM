<?php

function insertStagiaires(array $listStag):String{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    foreach ($listStag as $key => $value) {

   
    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag); }
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

include 'Functions.php';

function connexion()
{
    return new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}


function insertStagiaires(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connexion();
    foreach ($listStag as $key => $value) {
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($value);
    }
    return $status;
}

function selectstagiares (): array {
    $bdd=connexion();
    $sql = "SELECT * FROM stagiaire";
    $stmt= $bdd->prepare($sql);
    $stmt ->execute();
    $maListe= $stmt->fetchAll();
    return $maListe;
}

function UpdateStagiares (int $id, String $nom, String $prenom): bool {
    $bdd=connexion();
    $sql = "UPDATE*FROM stagiaire SET nom = $nom, prenom = $prenom WHERE id = $id" ;
    $stmt = $bdd -> prepare($sql);
    $statut = $stmt -> execute();
    return $statut;   
}
?>

