<?php
require_once '..\modele\function.php';
session_start();


$listPlaceStag = './save/Backup.json';

$listPlaceStag = placeStagRotate($listPlaceStag);

$_SESSION['listPlaceStag'] = $listPlaceStag;

header('Location: ../view/affichage.php');