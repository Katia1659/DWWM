<?php

class Employe extends Personne
{
    //on définit les attributs de la classe
    protected $salaire;

    //Constructeur d'initialisation

    public function __construct($prenom, $nom, float $salaire)
    {
        parent::__construct($prenom, $nom);
        $this->salaire = $salaire;
    }

    //===================== Méthodes =====================

    public function __toString()
    {
        return parent::__toString(). ", son salaire est de ". $this->salaire. " €";
    }

    //===================== Méthodes d'accès =====================
}
?>