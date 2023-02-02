<?php

include '../modele/BDManagement.php';
session_start();

$_SESSION['stagiaire'] = selectStagiaires($listStag);

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$place = $_GET['place'];

updateStagiaires($nom, $prenom, $place);

$_SESSION['stagiaire'] = selectStagiaires($listStag);
header('Location:../view/affichageUpdate.php');