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



?>