<?php

$colonne = readline('entrer la colonne a modifier');
$change = readline('nouveau paramètre');
$id = readline('entrer l id a changer');

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

updateStagiaires($colonne, $change, $id);

?>