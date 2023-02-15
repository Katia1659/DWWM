<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Developpeur.class.php";
include_once "../modele/Manager.class.php";

$mn = new Manager("LAGHDAR","Jean","laghdar@msn.com","06 36 71 65 30",3000,"Informatique");
$dev = new Developpeur("SALIM","Martin","salim@msn.com","06 11 20 65 30",1000,"PHP");