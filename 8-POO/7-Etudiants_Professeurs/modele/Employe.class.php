<?php

class Employe extends Personne
{
    protected $salaire;

    public function __construct($nom, $prenom, $salaire)
    {
        parent::__construct($nom, $prenom);
        $this -> salaire = $salaire;
    }

    public function __toString()
    {
        return "Je suis " . $this -> nom . ' ' . $this -> prenom . " mon salaire est: " . $this -> salaire;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}