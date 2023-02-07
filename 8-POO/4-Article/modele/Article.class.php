<?php

class Article
{
  private $reference;
  private $designation;
  private $prixHT;
  private $tauxTVA;
  public function __construct($reference, $designation){
      $this->reference = $reference;
      $this->designation = $designation;
  }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * @param mixed $prixHT
     */
    public function setPrixHT($prixHT): void
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @return mixed
     */
    public function getTauxTVA()
    {
        return $this->tauxTVA;
    }

    /**
     * @param mixed $tauxTVA
     */
    public function setTauxTVA($tauxTVA): void
    {
        $this->tauxTVA = $tauxTVA;
    }
    //method qui calcule le prixTTC
    public function calculerPrixTTC(): float{
        $prixHT = $this->getPrixHT();
        $tauxTVA = $this->getTauxTVA();
        $prixTTC = $prixHT + ($prixHT * $tauxTVA /100);
        return $prixTTC;
    }

    //Method pour afficher le resultat
    public function afficherArticle(): void{
        $reference = $this->getReference();
        $designation = $this->getDesignation();
        $prixHT = $this->getPrixHT();
        $prixTTC = $this->calculerPrixTTC();
        echo "Référence : $reference \n";
        echo "Désignation : $designation \n";
        echo "Prix HT : $prixHT  \n";
        echo "Le prix TTC est : $prixTTC \n";
    }
}
