<?php
include_once "../Modele/Vehicule.class.php";

//creation class camion evec vehicule en parent
Class Camion extends Vehicule{
    //private string $nomCamion;


    //constructeur avec constructeur class vehicule(parent)
    public function __construct(string $anneeModele,int $prix)
    {
        parent::__construct($anneeModele, $prix);
        //$this->nomCamion = $nomCamion;
    }

    //function accelerer pour le camion qui inclu les information du camion($i)
    public function accelerer(){
        
        echo "     Info du camion :\n".parent::__toString();
        echo "\nJe suis un camion, est j acceler encore impeu \n";
    }

    ////function demarrer pour le camion qui inclu les information du camion($i)
    public function demarrer(){
        echo "     Info du camion :\n".parent::__toString();
        echo "\nJe suis un camion, je demarre \n";
    }
 
}


?>