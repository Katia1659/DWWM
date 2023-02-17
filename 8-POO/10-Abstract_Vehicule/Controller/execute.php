<?php
include_once "../Modele/Camions.class.php";
include_once "../Modele/Voitures.class.php";

//creation tableau camion
$camion = array();
$camion[0] = new Camion("1995/Iveco", 38000 );
$camion[1] = new Camion("2002/Volkwagen", 14500 );

//tableau voiture
$voiture = array();
$voiture[0] = new Voiture("1995/Renald", 1500 );
$voiture[1] = new Voiture("2002/Ferrari", 72500 );


//info camion de $i + phrase type a demarrer camion
$camion[1]->demarrer();

//info camion de $i + phrase type a accelerer camion
$camion[0]->accelerer();

//info voiture de $i + phrase type a demarrer voiture
$voiture[0]->demarrer();

//info voiture de $i + phrase type a accelerer voiture
$voiture[1]->accelerer();

?>