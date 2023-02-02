<?php

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag);

    return $status;
}

function selectStagiaire() :  array
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $reponse = $bdd->query("SELECT * FROM stagiaire");

  $donnees = $reponse->fetchall();

  $reponse->closeCursor();
  return $donnees;
}


function changerInformation(string $nomOuPrenom, string $choixPrenom, string $modifPrenom, int $id ): void
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $nbmodifs = $bdd->exec("UPDATE stagiaire SET $nomOuPrenom = '$modifPrenom' WHERE $nomOuPrenom = '$choixPrenom' and place = 'Place_$id'");

    
}

function supprimerInformation($place) 
{
$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nb_modifs = $bdd->exec("DELETE FROM stagiaire WHERE PLACE = 'Place_$place'");

}
?>










