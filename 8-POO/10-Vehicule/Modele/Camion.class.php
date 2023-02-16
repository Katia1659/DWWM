<?php

include_once("../Modele/Vehicule.class.php");
class Camion extends Vehicule{

    //methode construct du camion
    public function __construct($_annee,$_modele,$_prix){

        parent::__construct($_annee,$_modele,$_prix);
    }


    //methode qui affiche les info du vehicule et l'info du camion
    public function __toString(){
        
        return "ce vehicule est un camion\n" .parent::__toString();
    }

    //methode qui affiche que le camion demarre 

    public function demarrer(){
        
        return "Le camion demarre ";
    }

    // methode qui affiche que le camion accelere 
    public function accelerer(){
        
        return "le camion fait vroum vroum";
        
    }



}