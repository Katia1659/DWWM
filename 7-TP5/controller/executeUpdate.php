<?php
include "../Modele/function.php";
//On récuppère les différentes variables

$colonne = $_GET['colonne'];
$change = $_GET['change'];
$id = $_GET['id'];

//On appelle la fonction pour changer la bdd
$updateValide = updateStagiaires($colonne, $change, $id);

//On redirige en fonction de la validité de la requête

if ($updateValide == true) {
    header('Location: ../view/update.php');
} else {
    header('Location: ../view/updateFalse.php');
}

//on refait un session pour afficher le tableau 
//(à impérativement mettre après la fonction pour supprimmer, sinon n'actulise pas le tableau après la suppression)

session_start();

$_SESSION['listStag'] = selectStagiaires();

?>