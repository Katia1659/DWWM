<?php
include_once("Vehicule.php");
//La Class camion est heritière de Vehicule
Class Camion extends Vehicule {
    //dans le construct on récupère les infos de Vehicule 
    public function __construct($annéeDuVehicule, $prix){
        parent::__construct($annéeDuVehicule,$prix);
    }

    //Méthode démarer et accélerer obligatoires par la Class Vehicule
    public function demarrer(){
        return "Vrooom, le camion à démarer !";
    }
    public function accelerer(){
        return "C'est parti Marty on accélère ! Faut atteindre les 88 miles a l'heure ! Ce camion est fait pour ateindre 80 miles en vitesse maximale ! On est dans de beau draps !";
    }
    //ToString pour afficher les information 
    public function __toString (){
        return "C'est un Camion Marty !".parent::__toString(). "Non de Zeus, c'est parfait pour ton déménagement !";
    }
}