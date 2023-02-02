<?php
include 'Functions.php';

// fonction pour établire la connexion à la BDD:
function connexion()
{
    return new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
//  function d'insertion (creation tableau):
function insertStagiaires(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connexion();
    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute($listStag);

    return $status;
}
//  function d'affichage :
function selectStagiaires(): array
{
    $bdd = connexion();
    $sql = "SELECT * FROM stagiaire";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    $maListe = $stmt->fetchAll();
    return $maListe;
}
//  function de la mise à jour :
function updateStagiaires(int $id, String $nom, String $prenom): bool
{
    $bdd = connexion();
    $sql = "UPDATE `stagiaire` SET `NOM`=?,`PRENOM`=? WHERE `ID`=?;";
    $variableArry = array($nom, $prenom, $id);
    $stmt = $bdd->prepare($sql);
    $statut = $stmt->execute($variableArry);
    return $statut;
}
//  function supprission:
function deleteStagiaire($id)
{
    $bdd = connexion();
    $sql = "DELETE FROM `stagiaire` WHERE `ID`='$id';";

    $stmt = $bdd->prepare($sql);
    $statut = $stmt->execute();
    return $statut;
}


//  fonction dlelte all:
function deleteAll()
{
    $bdd = connexion();
    $sql = "DELETE FROM `stagiaire`;";
    $stmt = $bdd->prepare($sql);
    $statut = $stmt->execute();
    return $statut;
}
