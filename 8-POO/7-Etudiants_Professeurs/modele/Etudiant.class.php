<?php

class Etudiant extends Personne
{
    private $cne;

    public function __construct($nom, $prenom, $cne)
    {
        parent::__construct($nom, $prenom);
        $this -> cne = $cne;
    }

    public function __toString()
    {
        return "Je suis " . $this -> nom . ' ' . $this -> prenom .  " mon CNE est: " . $this -> cne;
      
    }

    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}