<?php
include '../modele/DBManagement.php';

session_start();
$listStag = selectStagiaires();

$_SESSION['listStag']=$listStag;


header('location:../view/select.php');
