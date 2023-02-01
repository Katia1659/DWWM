<?php
require_once '../Modele/DBManagement.php';
session_start();

$_SESSION['stagiaires'] = selectStagiaires();

header('Location: ../View/select.php');
