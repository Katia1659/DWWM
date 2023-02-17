<?php
include_once("../Modele/Developpeur.Class.php");
include_once("../Modele/Personne.Class.php");
include_once("../Modele/Manager.Class.php");

$users = array();

$users[0] = new Developpeur("Romero", "George", "NightOfTheLivingDead@gmail.com", 
"0617216458", 10000,"PHP");
;
$users[1] = new Developpeur("Boyle", "Danny", "28DaysLater@gmail.com", 
"0617216479", 10000 , "JAVA(pas script lol mdr... je suis si seul...)");

$users[2] = new Manager ("Snyder", "Zach", "ArmyofTheDead@gmail.com", 
"0617516459", 10000,"Informatique");

$users[3] = new Manager ("Verhoven","Paul", "StarshipTroopers@gmail.com",0623445512, 1000,"Espionnage Industriel");


 
    echo $users[0];
    echo $users[1];
    echo $users[2];
    echo $users[3];
