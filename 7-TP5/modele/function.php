<?php

//================================================ FONCTION 1 ===============================================================

//fonction pour lire le fichier

function readFileToArray(string $filePath) : array {
    $nom = file($filePath,FILE_IGNORE_NEW_LINES);
    return $nom;
}


//================================================ FONCTION 2 ===============================================================

//fonction pour créer le tableau associatif

function generateStagPlaces(array $listPlaces, array $listStag) : array {   

    $combine = array_combine($listPlaces,$listStag);
    return $combine;

    
}  

//================================================ FONCTION 3 ===============================================================

//Fonction pour insérer dans la bdd

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false ;
    for ($i=0; $i < count($listStag); $i++) { 
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt= $bdd->prepare($sql);
        $status = $stmt->execute($listStag[$i]);
    }
    
    return $status;
}

//================================================ FONCTION 4 ===============================================================

//fonction pour faire tableau multidimensionnel

function generateMulti(array $listStagPlaces): array{
    $table = [];
    $listStagPlaces = preg_replace("/\s+/", ",",$listStagPlaces);
    foreach ($listStagPlaces as $key => $value) {
        $line = $value. ",". $key;
        $table[] = explode(",",$line);
    }
    return $table;
}

//================================================ FONCTION 5 ===============================================================

//fonction pour afficher le tableau

function selectStagiaires(): array{
    //connection à la bdd
    $host = 'localhost';
	$dbname = 'dwwm_2023';
	$username = 'root';
	$password = '';
		
	$dsn = "mysql:host=$host;dbname=$dbname"; 
	// récupérer tous les utilisateurs
	$sql = "SELECT * FROM stagiaire";

    $pdo = new PDO($dsn, $username, $password);
	$stmt = $pdo->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

//================================================ FONCTION 6 ===============================================================

//Fonction Pour modifier les données

function updateStagiaires($colonne, string $change, int $id): bool{
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbname = 'dwwm_2023';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    //version en dur
    // $sql = "UPDATE stagiaire SET NOM='LAMRI' WHERE id=19";   
    $sql = "UPDATE stagiaire SET $colonne='$change' WHERE id=$id"; 

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
        }

    $conn->close();
    return $sql;
}

//================================================ FONCTION 7 ===============================================================

//fonction pour supprimer des données

function deleteStagiaires(int $id): bool{
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = 'dwwm_2023';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    //version en dur
    // $sql = "DELETE FROM MyGuests WHERE id=3";
    $sql = "DELETE FROM stagiaire WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    return $sql;
}

//================================================ FONCTION 8 ===============================================================

//fonction pour supprimer toute la table

function deleteAllStagiaire(): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    $sql = "DELETE FROM stagiaire";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}

//================================================ FONCTION 9 ===============================================================

//fonction pour changer les places en aléatoires
function randomizePlacesStag(array $listStagPlaces) : array {
    $new = array();
    $values = array();
    //on créer un tableau avec juste les value et on les mélanges
    $values = array_values($listStagPlaces);
    shuffle($values);

    //on recréer un tableau avec les key et les value
    $new = array_combine(array_keys($listStagPlaces),$values);
    return $new;
}


?>