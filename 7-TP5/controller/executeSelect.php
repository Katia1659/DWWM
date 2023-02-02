<?php

include '../modele/BDManagement.php';
session_start();
$_SESSION ['stagiaire'] = selectStagiaires();
header('Location:../view/affichageSelect.php');

?>