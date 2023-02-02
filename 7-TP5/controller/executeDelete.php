<?php
include "../Modele/function.php";
//On récuppère les différentes variables

$id = $_GET['id'];



//On appelle la fonction pour supprimer un id
deleteStagiaires($id);

//On redirige en fonction de la validité de la requête
header('Location: ../view/delete.php');



// if ($exeDelete == true) {
//     header('Location: ../view/delete.php');
// } else {
//     header('Location: ../view/deleteFalse.php');
// }

//on refait un session pour afficher le tableau 
//(à impérativement mettre après la fonction pour supprimmer, sinon n'actulise pas le tableau après la suppression)

session_start();

$_SESSION['listStag'] = selectStagiaires();

?>