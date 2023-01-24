<?php
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`, même si c'est une chaîne de caractères vide
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '</pre>';
*/
include "../model/functions.php";

$nom = ($_GET["Nom"]);
$_SESSION["Nom"] = $nom;

$prenom = ($_GET["Prénom"]);
$_SESSION["Prénom"] = $prenom;


$dateNaissance = $_GET["date"];

$age = getAgeFromDate ($dateNaissance);

echo $age;

$sexe = $_GET['gender'];

$result = verifImpotsParis ($age, $sexe);


if ($result == false){
    header('Location: ../view/nonImposable.php');
}else{
    header('Location: ../view/imposable.php');
}

?>