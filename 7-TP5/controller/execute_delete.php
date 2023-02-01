<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

// Lancement de la fonction pour supprimer 
$place = ($_GET['place']);
header('location:../view/index.php');
deleteLigne($place)
?>
