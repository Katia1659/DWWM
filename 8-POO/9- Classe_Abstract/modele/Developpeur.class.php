<?php

include_once "../modele/Personne.class.php";

class Developpeur extends Personne 
{
    private $specialite;

public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite)
    { 
    // parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;
    $this->specialite = $specialite;
    }

    public function calculerSalaire()
    {
        return 1.2 * $this->salaire;
    }

    public function affiche()
    {
        echo 
        "\nLe salaire du Développeur " .$this->nom." ".$this->prenom." est : " . $this->salaire." € \n";
        "\n Sa spécialité : " . $this->specialite."\n";
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}