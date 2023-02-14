<?php

class Professeur extends Employe
{
    private $specialite;

    public function __construct($nom, $prenom,$salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $salaire);
        $this -> specialite = $specialite;
    }

    public function __toString()
    {
        return "Je suis " . $this -> nom . ' ' . $this -> prenom . " mon salaire est: " . $this -> salaire . "ma specialité est: " . $this -> specialite;
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