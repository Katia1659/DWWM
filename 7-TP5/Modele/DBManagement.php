<?php

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
for ($i=0; $i < count($listStag); $i++) { 
    $sql = "INSERT INTO stagiaire (NOM, PRENOM, PLACE) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag[$i]);
}
    return $status;
}

///////////////////function select////////////
function selectStagiaire(): array {
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "SELECT * FROM stagiaire";
    $stnt= $bdd->query($sql);
    $tab = $stnt->fetchAll();
    return $tab;
}
    

function updateStagiaire():bool{
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $id = $_POST['id'];
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "UPDATE stagiaire SET  NOM='$nom', PRENOM = '$prenom' WHERE id='$id'";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}

function deleteStagiaire(): bool {
    $id = $_POST['iddelete'];
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "DELETE FROM stagiaire WHERE id='$id'";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}
?>