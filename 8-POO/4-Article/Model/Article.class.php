<?php


//On définie la class Article avec ses propriétés
Class Article{
    private $reference;
    private $designation;
    private $prixHT;
    private $tauxTVA;

//On définie ses méthodes 

    public function __construct($reference,$designation,$prixHT,$tauxTVA){
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHT = $prixHT;
        $this->tauxTVA = $tauxTVA;        
    }

    public function calculerPrixTTC($prixHT,$tauxTVA){
        $prix = $prixHT+($prixHT*($tauxTVA/100));
        return $prix;
    }

    public function afficherArticle(){
        $reference = $this->getReference();
        $designation = $this->getDesignation();
        $prixHT = $this->getPrixHT();
        $tauxTVA = $this->getTauxTVA();
        $prixTTC = $this->calculerPrixTTC($prixHT,$tauxTVA);
        echo "Référence : $reference \nDésignation : $designation\nPrix Hors Taxes : $prixHT\nPrix Toutes Taxes Comprises : $prixTTC\n";
    }
//Tous les getter/setter 
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


?>