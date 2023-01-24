<?php
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`,
// même si c'est une chaîne de caractères vide
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '</pre>';
if ($_GET['nom'] == 'TOTO'){
	header('Location: get1_success.php');
}else{
	header('Location: get1_error.php');
}*/

include_once '../modele/function.php';
session_start();

//on recupere les donnees du formulaire
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$date = $_GET['date'];
$gender = $_GET['gender'];
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;

//on transforme la date en age.
$age = getAgeFromDate($date);

//on verifie si la personne payent des impots ou non.
$impots = verifImposParis($age, $gender);



//on l'envoie sur une page si il est imposable ou non.
if ($impots){
    $_SESSION['status'] = 'IMPOSABLE';
    header('Location: ../view/affichage.php');
}else{
    $_SESSION['status'] = 'NON IMPOSABLE';
    header('Location:../view/affichage.php');
}

