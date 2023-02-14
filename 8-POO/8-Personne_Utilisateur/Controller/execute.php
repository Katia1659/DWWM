<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Utilisateur.class.php";


$cp = new Profil("1","CP");
$mn = new Profil("2","MN");
$dp = new Profil("3","DP");
$drh = new Profil("4","DRH");
$dg = new Profil("5","DG");

$philippe = new Utilisateur("Filou","AZERTY","Boucherie", "philippe", "Saudemont","FS@gmail.com","0606060606", 500000);
$thibaut = new Utilisateur("tibout","AZERTY","Informatique", "Thibaut", "Saudemont","TS@gmail.com","0606060606", 500000);
$henry = new Utilisateur("ryry","AZERTY","Vétérinaire", "Henry", "Salvador","HS@gmail.com","0606060606", 500000);
$charlie = new Utilisateur("Charlou","AZERTY","Pianiste", "Charlie", "Chocolat","CC@gmail.com","0606060606", 500000);



