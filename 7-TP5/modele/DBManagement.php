<?php

function insertStagiaires(array $listStag):bool{
   
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag);

    return $status;
}

function viewStagiaires() : array
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM `stagiaire`');
    
    $donnees = $reponse->fetchall();
    return   $donnees;
}

function changerInformation(string $nomOuPrenom, string $ancienNomOuPrenom, string $nouveauNomOuPrenom, int $place ): void
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $nb_modifs = $bdd->exec("UPDATE stagiaire SET $nomOuPrenom = '$nouveauNomOuPrenom' WHERE $nomOuPrenom = '$ancienNomOuPrenom' and place = 'Place_$place'");

    echo $nb_modifs . ' entrées ont été modifiées !';
}

function deleteLigne(int $place) : void 
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->exec("DELETE FROM stagiaire WHERE PLACE ='Place_$place'");
}
