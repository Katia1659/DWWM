<?php
include_once "Vehicule.class.php";

class Voiture extends Vehicule
{
    //on définit les attributs de la classe
    public function __construct(int $annee, float $prix)
    {
        parent::__construct($annee, $prix);
    }

    //Constructeur d'initialisation

    //===================== Méthodes =====================

    public function demarrer(){
        echo "démarrage \n";
    }

    public function accelerer(){
        echo "vroum \n";
    }

    public function __toString(): string
    {
        $afficher = "Voiture: \n". parent::__toString();
        return $afficher;
        
    }


    //===================== Méthodes d'accès =====================
}

?>