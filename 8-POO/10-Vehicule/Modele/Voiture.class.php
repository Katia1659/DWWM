<?php

include_once("../Modele/Vehicule.class.php");
class Voiture extends Vehicule{

    // methode construct de la voiture
    public function __construct($_annee,$_modele,$_prix){

        parent::__construct($_annee,$_modele,$_prix);
    }

    //affiche les info de la voiture 
    public function __toString(){
        
        return  " ce vehicule est une voiture\n". parent::__toString();
    }

    //methode qui montre que la voiture demarre 
    public function demarrer(){
        
        return "la voiture demarre";
    }

    //methode qui affiche que la voiture accelere
    public function accelerer(){
        
        return "la voiture fait vroum vroum";
        
    }



}