<?php
include_once "../Model/Vehicule.class.php";
//Initialisation de la class
class Voiture extends Vehicule{
    //Initialisation du construct
    public function __construct($annee,$modele,$prix){
        parent::__construct($annee,$modele,$prix);
    }
//Utilistation des méthodes
    public function accelerer(){
        echo "Vrouuuum......Vrouuuuum\n ";
    }
    public function demarrer(){
        echo "'Ronronement de moteur'\n";
    }

    public function __toString(){
        echo "Infos de la voiture : \n";
        return parent::__tostring();
    }
}


?>