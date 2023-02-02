<?php

//----------------------------------------------------------------

// fonction pour lire un fichier 

function readFileToArray (string $filePath) : array {
    $fichier = file($filePath,FILE_IGNORE_NEW_LINES);
    return $fichier;
}


//----------------------------------------------------------------

// fonction combinant deux tableaux 

function generateStagPlaces( array $listStag, array $listPlace) : array {
    $tab = array_combine($listPlace, $listStag);
    return $tab;
}

//----------------------------------------------------------------


// fonction insert 

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

//***********************************************************

// fonction select

function selectStagiaires() : array{

$host = 'localhost';
$dbname = 'dwwm_2023';
$username = 'root';
$password = '';
  
$dsn = "mysql:host=$host;dbname=$dbname"; 
// récupérer tous les utilisateurs
$sql = "SELECT * FROM stagiaire";

$pdo = new PDO($dsn, $username, $password);
$stmt = $pdo->query($sql);
$listStag = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $listStag;
}



//***********************************************************


// fonction update

function updateStagiaires(string $nom, string $prenom, int $place) : void  {
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $nb_modifs = $bdd->exec("UPDATE stagiaire SET NOM='$nom',PRENOM='$prenom' WHERE PLACE='Place_$place';");
    echo $nb_modifs . ' entrées ont été modifiées !';

}




//***********************************************************


// fonction delete


function deleteStagiraires(array $listStag) : bool {

    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    for ($i=0; $i < count($listStag['ID']) ; $i++) { 
        $id = $listStag['ID'][$i];
        $sql = "DELETE FROM stagiaire WHERE ID = $id";
        $stmt = $bdd-> prepare($sql);
        $status = $stmt -> execute();
    }
    return $status;
}


//----------------------------------------------------------------

// fonction changeant les valeurs aleatoirement du tableau

function randomizePlacesStag ( array $listStagPlace) : array {
    $temp = array();
    $temp = array_values($listStagPlace);
    shuffle($temp);
    $new = array_combine(array_keys($listStagPlace), $temp);
    return $new;

}

//----------------------------------------------------------------