<?php

class Article{

    //attributs    
    private $prixHt;
    private $reference;
    private $designation;
    private $tauxTva;


    //methode construct 
    public function __construct($reference,$designation,$prixHt,$tauxTva) {

        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->tauxTva = $tauxTva;

    }


    //methode calcule ttc
    public function calculePrixTtc() {
        $prixHt = $this->getPrixHt();
        $tva = $this->getTauxTva();

        $ttc = $prixHt + ($prixHt * $tva / 100);

        return $ttc;
    }

  
    //methode affiche le resultat
    public function afficherArticle() {

        $designation = $this ->getDesignation();
        $reference = $this ->getReference();
        $prixHt = $this ->getPrixHt();
        $ttc = $this->calculePrixTtc();
        echo "La reference est : $reference \n la designation est : $designation \n le prix hors taxes est : $prixHt\n Le prix ttc est de : $ttc";
    }


    //get et set des attributs 


    /**
     * Get the value of prixHt
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * Set the value of prixHt
     */
    public function setPrixHt($prixHt): self
    {
        $this->prixHt = $prixHt;

        return $this;
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
     */
    public function setReference($reference): self
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
     */
    public function setDesignation($designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of TauxTva
     */
    public function getTauxTva()
    {
        return $this->tauxTva;
    }

    /**
     * Set the value of TauxTva
     */
    public function setTauxTva($tauxTva): self
    {
        $this->tauxTva = $tauxTva;

        return $this;
    }
}



?>
