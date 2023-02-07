<?php

//class

class Article
{
    
    private $reference;
    private $designation;
    private $prixHT;    
    private $tauxTVA ;


    

    //Constructeur d'initialisation
    public function __construct($reference, $designation){
        $this->reference = $reference;
        $this->designation = $designation;
    }

    //===================== Méthodes =====================

    public function CalculerPrixTTC(): float{
        // $tauxTVA = 1.2;
        
        $prixTTC = $this->prixHT + ($this->prixHT * $this->tauxTVA / 100);
        return $prixTTC ;
    }

    public function afficherArticle(): string{
        $prixTTC = $this->CalculerPrixTTC();
        $afficher = "Référence: ". $this->reference. PHP_EOL. "Désignation: ". $this->designation. PHP_EOL. "Prix HT: ". $this->prixHT. PHP_EOL. "Le prix TTC est de ". $prixTTC;
        return $afficher;
    }

    //===================== Méthodes d'accès =====================

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