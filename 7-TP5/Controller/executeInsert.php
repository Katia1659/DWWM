<?php
include_once "../Modele/DBManagement.php";
include_once "../Modele/functions.php";

session_start();


$tab = $_FILES['file']['tmp_name'];



$listPlaces = array (
    
    'Place_1',
    'Place_2',
    'Place_3',
    'Place_4',
    'Place_5',
    'Place_6',
    'Place_7',
    'Place_8',
    'Place_9',
    'Place_10',
    'Place_11',
    'Place_12',
    'Place_13',
    'Place_14',
    'Place_15',
    'Place_16',

);

$listeUpload = readData($tab);

$status = insertStagiaires($listeUpload);

if ($status) {
    echo "ok!!!";
} else {
    echo "KO!!!";
}

header("Location: ../View/index.php");