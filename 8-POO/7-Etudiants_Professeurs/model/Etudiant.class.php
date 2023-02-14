<?php

class Etudiant extends Personne
{
    //on définit les attributs de la classe
    private $cne;

    //Constructeur d'initialisation

    public function __construct($prenom, $nom, string $cne)
    {
        parent::__construct($prenom, $nom);
        $this->cne = $cne;
    }

    //===================== Méthodes =====================

    public function __toString()
    {
        return parent::__toString(). " et son CNE est le: ". $this->cne;
    }

    //===================== Méthodes d'accès =====================
}

?>