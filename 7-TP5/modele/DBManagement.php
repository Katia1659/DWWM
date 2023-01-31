<?php

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag);

    return $status;
}

function viewStagiaires() :void{
    session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM `stagiaire`');
    
    $donnees = $reponse->fetchall();
    
    for ($i=0; $i < 16; $i++) { 
    
    $_SESSION["nom$i"] = ($donnees[$i]['NOM']);
    $_SESSION["prenom$i"] = ($donnees[$i]['PRENOM']);
    }
}


function changerInformation(string $nomOuPrenom, string $ancienNomOuPrenom, string $nouveauNomOuPrenom) : void
{
$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nb_modifs = $bdd->exec("UPDATE stagiaire SET $nomOuPrenom = \'$nouveauNomOuPrenom\' WHERE $nomOuPrenom = \'$ancienNomOuPrenom\'");

echo $nb_modifs . ' entrées ont été modifiées !'; }

?>