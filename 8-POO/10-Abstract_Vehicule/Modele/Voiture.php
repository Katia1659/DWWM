<?php
include_once("Vehicule.php");
//La Class voiture est heritière de Vehicule
Class Voiture extends Vehicule {
    //dans le construct on récupère les infos de Vehicule 
    public function __construct($annéeDuVehicule, $prix){
        parent::__construct($annéeDuVehicule,$prix);
    }

    //Méthode démarer et accélerer obligatoires par la Class Vehicule
    public function demarrer(){
        return "Vrooom, la voiture à démarer !";
    }
    public function accelerer(){
        return "C'est parti Marty on accélère ! Faut atteindre les 88 miles a l'heure ! Elle est faite pour ateindre 120 miles en vitesse maximale ! Ça décoiffe !";
    }
    //ToString pour afficher les information 
    public function __toString (){
        return "C'est une voiture Marty !".parent::__toString(). "Non de Zeus !";
    }
}