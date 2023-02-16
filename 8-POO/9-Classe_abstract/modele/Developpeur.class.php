<?php

class Developpeur extends Personne
{
    private $specialite;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this -> specialite = $specialite;
    }

    public function calculerSalaire()
    {
        return $this -> salaire *= 1.2;
    }


    public function __toString()
{
    $salaire = $this->calculerSalaire();
    return "Le salaire du développeur " . $this->nom ." " .$this->prenom ." est : " .$salaire . " €, sa spécialité : ".$this->specialite;
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