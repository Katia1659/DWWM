<?php 

// On crée une classe abstraite voiture, avec ses attributs privés

 abstract Class Vehicule {
    private string $matricule; 
    public static $compteur;

    private int $anneeModele;
    private float $prix;

// On crée la méthode construct qui initialise les attributs de la classe

    public function __construct(int $anneeModele, float $prix) {
        self::$compteur++;
        $this->matricule = self::$compteur;
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
}

// On crée deux méthodes abstraites qui se nomment demarrer() et accelerer()

abstract public function demarrer();

abstract public function accelerer();


// On crée la méthode toString qui permet de convertir un objet en chaine de caractres, et retourne ainsi toutes les informations 
public function __toString() {
    return "le matricule du véhicule est ". $this->matricule.", son modèle est de ".$this->anneeModele;
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
     * Get the value of anneeModele
     */ 
    public function getAnneeModele()
    {
        return $this->anneeModele;
    }

    /**
     * Set the value of anneeModele
     *
     * @return  self
     */ 
    public function setAnneeModele($anneeModele)
    {
        $this->anneeModele = $anneeModele;

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