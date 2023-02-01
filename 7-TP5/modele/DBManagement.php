<?php
include 'Functions.php';

function connexion()
{
    return new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}


function insertStagiaires(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connexion();
   
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($listStag);
   
    return $status;
}

function selectStagiaires(): array
{
    $bdd = connexion();
    $sql = "SELECT * FROM stagiaire";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    $maListe = $stmt->fetchAll();
    return $maListe;
}

function updateStagiaires(int $id, String $nom, String $prenom): bool
{
    $bdd = connexion();
    $sql = "UPDATE `stagiaire` SET `NOM`=?,`PRENOM`=? WHERE `ID`=?;";
    $variableArry =array($nom, $prenom, $id);
    $stmt = $bdd->prepare($sql);
    $statut = $stmt->execute($variableArry);
    return $statut;
}

function deleteStagiaire ($id){
    $bdd = connexion();
    $sql = "DELETE FROM `stagiaire` WHERE `ID`='$id';";

    $stmt = $bdd->prepare($sql);
    $statut = $stmt->execute();
    return $statut;

}

// function serachStagByname (String $nom):array {
//     $bdd=connexion();
//     $search="%$nom";
//     $sql = "SELECT (select concat (nom, prenom) as nomPrenom,* from stagiaire )as req WHERE nomPrenom like '?';";
//     $stmt= $bdd -> prepare($sql);
//     $stmt -> bindValue('?', $search,PDO::ERR_NONE);
//     // $stmt -> execute();
//     $stagiare= $stmt ->fetchAll(PDO::FETCH_ASSOC);
//     return $stagiare;

// }
