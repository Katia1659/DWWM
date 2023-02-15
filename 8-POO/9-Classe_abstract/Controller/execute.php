<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Manager.class.php" ;
include_once "../modele/Developpeur.class.php" ;


$developpeur[1] = new Developpeur("Back");
$developpeur[2] = new Developpeur("Back");
$developpeur[3] = new Developpeur("Back");

$manager[1] = new Manager("informatique");
$manager[2] = new Manager("informatique");
$manager[3] = new Manager("informatique");



echo $manager[1];
echo $developpeur[1];


