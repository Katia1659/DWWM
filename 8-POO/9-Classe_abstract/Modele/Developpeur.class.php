<?php

class Developpeur extends Personne
{ //ATTRIBUTS
    private $specialite;
    //CONTRUCTION
    public function __construct($specialite)
    {
        
        $this->specialite = $specialite;
    }



    abstract function calculerSalaire()
    {

    }






    public function __toString()
    {
        return "$this->specialite";
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
