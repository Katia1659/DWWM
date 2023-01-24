<?php
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`, même si c'est une chaîne de caractères vide
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '</pre>';
*/


require ('../modele/functions.php');

session_start();

$dateNaissance = $_GET['dateNaiss'];
$aujourdhui = date('Y-m-d');
$sexe = $_GET['gender'];




$age = convertAge($dateNaissance, $aujourdhui);

$imposable = verifAgeImpot($age,$sexe);

if (verifAgeImpot($age, $sexe) == true) {

	header('Location: ../view/imposable.php');
} else {
	header('Location: ../view/nonImposable.php');

}

$_SESSION['prenom'] = $_GET['prenom'];
$_SESSION['nom'] = $_GET['nom'];



// if ($_GET['nom'] == 'TOTO'){
// 	header('Location: get1_success.php');
// }else{
// 	header('Location: get1_error.php');
// }


?>