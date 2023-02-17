<?php
//Création Class Abstraite du vehicule
abstract Class Vehicule {
    private string $matricule;
    public static $compteur =0;
    private int $annéeDuVehicule;
    private float $prix;
    
    //Construct avec auto incrémentation pour le matricule 
    public function __construct( $annéeDuVehicule,$prix){
        self::$compteur++;
        $this->matricule = self::$compteur;
        $this->annéeDuVehicule = $annéeDuVehicule;
        $this->prix = $prix;
    }
    //2 fonction abstraitre pour les é types de vehicule
    abstract public function demarrer();
    abstract public function accelerer();

    //Affichage des info de base du vehicule 
    public function __toString(){
        return "Le vehicule a comme matricule $this->matricule, le modèle du vehicule date de $this->annéeDuVehicule et sont prix est de $this->prix. ";
    }
    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of compteur
     */ 
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */ 
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get the value of annéeDuVehicule
     */ 
    public function getAnnéeDuVehicule()
    {
        return $this->annéeDuVehicule;
    }

    /**
     * Set the value of annéeDuVehicule
     *
     * @return  self
     */ 
    public function setAnnéeDuVehicule($annéeDuVehicule)
    {
        $this->annéeDuVehicule = $annéeDuVehicule;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}
