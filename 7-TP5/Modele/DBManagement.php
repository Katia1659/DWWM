<?php
function connectBdd(): object
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root',
        '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}


function insertStagiaires(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connectBdd();
    $status = false;
    for ($i = 0; $i < count($listStag); $i++) {
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($listStag[$i]);

    }
    return $status;

}

function insertStagiaires2(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connectBdd();
    $status = false;
    foreach ($listStag as $stag) {
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($stag);

    }
    return $status;

}

function selectStagiaires(): array
{
    $bdd = connectBdd();
    $sql = "SELECT * FROM stagiaire";
    $stmt = $bdd->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

function updateStagiaires(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connectBdd();
    $id = $listStag['ID'];
    $nom = $listStag['NOM'];
    $prenom = $listStag['PRENOM'];
    $sql = "UPDATE stagiaire SET NOM='$nom', PRENOM='$prenom' WHERE ID='$id'";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}

function deleteStagiaires(array $listStag): bool
{
    $bdd = connectBdd();
    $status = false;
    for ($i = 0; $i < count($listStag['ID']); $i++) {
        $sql = "DELETE FROM stagiaire WHERE ID='".$listStag['ID'][$i]."'";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute();
    }
    return $status;
}


