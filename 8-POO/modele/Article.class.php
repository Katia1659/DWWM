<?php
class Article
{//ATTRIBUTS
    private $reference;
    private $designation;
    private $prixHt;
    private $tauxTva;

    //CONTRUCTION
    public function __construct($ref, $des, $prixht, $tva)
    {
        $this->reference = $ref;
        $this->designation = $des;
        $this->prixHt = $prixht;
        $this->tauxTva = $tva;
    }

    // CALCUL DU PRIX TTC
    function calculerPrixTtc()
    {
        $reponse = $this->prixHt + ($this->prixHt * $this->tauxTva / $this->tauxTva);
        return $reponse;

    }

    //AFFICHAGE DES REF DE L'ARTICLE EN UTILISANT LA FONCTION DE CALCUL TTC
    function afficherArticle()
    {
        $ttc = $this->calculerPrixTtc();
        echo "Référence : $this->reference \nDesignation : $this->designation \nLe prixHt : $this->prixHt \nLe prix TTC est $ttc \n\n";
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


}