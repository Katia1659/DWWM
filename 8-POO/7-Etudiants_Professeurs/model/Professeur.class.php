<?php

class Professeur extends Employe
{
    //on définit les attributs de la classe
    private $specialite;

    //Constructeur d'initialisation
    public function __construct($prenom, $nom, $salaire, string $specialite)
    {
        parent::__construct($prenom, $nom, $salaire);
        $this->specialite = $specialite;
    }

    //===================== Méthodes =====================
    public function __toString()
    {
        return parent::__toString(). " et sa spécialité est: ". $this->specialite;
    }

    //===================== Méthodes d'accès =====================


}

?>