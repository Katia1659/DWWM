<?php

// creation de la class
class Article {

    //creation des attribut
    private $reference;
    private $designation;
    private $prixHt;
    private $tauxTva;

//creation de mathod construct
    public function __construct($reference, $designation, $prixHt, $tauxTva){
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->tauxTva = $tauxTva;
    
    }
//creation de mathod calculerPrixTtc
    public function calculerPrixTtc(){
        
        $prixTtc = $this->prixHt + ($this->prixHt * $this->tauxTva / $this->tauxTva);
        return $prixTtc;
    }
//creation de mathod afficherArticle
    public function afficherArticle(){
        $prixTtc = $this->calculerPrixTtc();
        echo "Référence : $this->reference \nDesignation : $this->designation \nLe prixHt : $this->prixHt \nLe prix TTC est $prixTtc \n\n";
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
     * Get the value of prixHt
     */ 
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * Set the value of prixHt
     *
     * @return  self
     */ 
    public function setPrixHt($prixHt)
    {
        $this->prixHt = $prixHt;

        return $this;
    }

    /**
     * Get the value of tauxTva
     */ 
    public function getTauxTva()
    {
        return $this->tauxTva;
    }

    /**
     * Set the value of tauxTva
     *
     * @return  self
     */ 
    public function setTauxTva($tauxTva)
    {
        $this->tauxTva = $tauxTva;

        return $this;
    }
    }

  

?>