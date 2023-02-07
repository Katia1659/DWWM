<?php

class Article {

    private $reference;
    private $designation;
    private $prixHt;
    private $tauxTva;
    private $prixTtc;

    public function __construct($reference, $designation, $prixHt, $tauxTva, $prixTtc){
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->tauxTva = $tauxTva;
       
        
    
    }

    public function calculerPrixTtc($prixHt, $tau):int{
        $prixHt = $this->getPrixHt();
        $tauxTva = $this->getTauxTva();
        $prixTtc = ($prixHt*$tauxTva/100);
        return $prixTtc;
    }

    public function afficherArticle():void{
        $reference = $this->getReference();
        $designation = $this->getDesignation();
        $prixHt = $this->getPrixHt();
        
        echo $message = "reference ".$reference."\n"."designation".$designation."\n"."prixHt".$prixHt."\n"."prixTtc est 0"."\n";

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