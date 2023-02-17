<?php
include_once "../Modele/Vehicule.class.php";

//creation class voiture evec vehicule en parent
Class Voiture extends Vehicule{
    //private string $nomVoiture;

   //constructeur avec constructeur class vehicule(parent)
    public function __construct(string $anneeModele,int $prix){

        parent::__construct($anneeModele, $prix);
        //$this->nomVoiture = $nomVoiture;
    }
     //function accelerer pour le voiture qui inclu les information parent de la voiture($i)
    public function accelerer(){
        echo "     Info de la Voiture :\n".parent::__toString();
        echo "\nJe suis une voiture +20kilometre/h \n";
    }
    //function demarrer pour le camion qui inclu les information parent de la voiture($i)
    public function demarrer(){
        echo "     Info de la Voiture :\n".parent::__toString();
        echo "\nLa voiture demarre \n";
    }
}

?>