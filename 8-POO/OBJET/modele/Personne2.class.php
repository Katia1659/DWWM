<?php
Class Personne{
    public $nom;
    public $prenom;
    public $dateNaiss;
    public $adresse;

    public function __construct ($nom, $prenom, $dateNaiss, $adresse){
        echo "Bonjour!";
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;
        $this->adresse = $adresse;
    }

    public function marcher(){
        echo "Je marche";
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

?>