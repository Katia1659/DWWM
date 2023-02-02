<?php

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    

    $sql = "INSERT INTO stagiaire (NOM, PRENOM, PLACE) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag);
    return $status;
}

function updateStagiaires(string $nomOuPrenom, string $nouveauNom, string $ancienNom,int  $place): void{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->exec("UPDATE stagiaire SET $nomOuPrenom = '$nouveauNom' WHERE $nomOuPrenom = '$ancienNom' and place = 'Place_$place'");

}


function deleteStagiaires(int $place): void{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->exec("DELETE FROM stagiaire WHERE place = 'Place_$place'");

}

function selectStagiaires(array $listStag):bool{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
    $bdd->exec("SELECT * FROM stagiaire");
    $stmt= $bdd->prepare($bdd);
    $status = $stmt->execute($listStag);
    return $status;

}

?>