<?php

// Création d'une classe article avec 4 attributs

Class Article {
    private $reference;
    private $designation;
    private $prixHT;
    public $tauxTVA;

// On crée la méthode construct qui initialise les attributs de l'objet

    public function __construct($reference, $designation, $prixHT, $tauxTVA)
    {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHT = $prixHT;
        $this->tauxTVA = $tauxTVA;
    }

// On crée la méthode CalculerprixTTC qui calcule le prix TTC 

    public function calculerPrixTTC() {
       $prixTTC =  $this->prixHT + ($this->prixHT*$this->tauxTVA/100);
       return $prixTTC;
    }

// La méthode afficherArticle permet d'afficher les caractéristiques de l'article

    public function afficherArticle() {
        echo "Référence : ".$this->reference. "\n";
        echo "Désignation : ".$this->designation. "\n";
        echo "PrixHT : ".$this->prixHT. "\n";
        echo "Le prix TTC est : ".$this->calculerPrixTTC()."\n";
    }

    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of designation
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @return  self
     */ 
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of prixHT
     */ 
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set the value of prixHT
     *
     * @return  self
     */ 
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    /**
     * Get the value of tauxTVA
     */ 
    public function getTauxTVA()
    {
        return $this->tauxTVA;
    }

    /**
     * Set the value of tauxTVA
     *
     * @return  self
     */ 
    public function setTauxTVA($tauxTVA)
    {
        $this->tauxTVA = $tauxTVA;

        return $this;
    }
}