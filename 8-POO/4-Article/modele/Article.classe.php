<?php


/**
 * Classe Article
 */

class Article
{
    private $reference;
    private $designation;
    private $prixHt;
    private $Tva;

    public function __construct($ref,$designe,$prix)
    {
        $this->reference=$ref;
        $this->designation=$designe;
        $this->prixHt=$prix;
    }

    /**
     * Calcule prix article
     * @return float
     */

    public function CalculerPrixTTC(): float
    {
        $prixHT=$this-> prixHt;
        $tva = $this->Tva;
        $prixTTC=$prixHT+($prixHT*$tva/100);
        return $prixTTC;

    }
    /**
     * Affichage de l'article
     * @return void
     */

    public function afficheArticle():void
    {
        echo "LA référence de l'article est: ".$this->reference."\n";
        echo "Désignation de l'article est: ".$this->designation."\n";
        $prix=$this->CalculerPrixTTC();
        echo "Le prix de l'article est :".$prix."\n";
        echo PHP_EOL;
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
     * Get the value of Tva
     */ 
    public function getTva()
    {
        return $this->Tva;
    }

    /**
     * Set the value of Tva
     *
     * @return  self
     */ 
    public function setTva($Tva)
    {
        $this->Tva = $Tva;

        return $this;
    }
}