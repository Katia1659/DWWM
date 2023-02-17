<?php

//Initialisation de la class en abstract
abstract class Vehicule{
    //Initialisation des attributs de la class
    private static int $count = 0;
    private int $matricule;
    private string $annee;
    private string $modele;
    private float $prix;

       
//Initialisation du construct
public function __construct($annee,$modele,$prix){
    $this->annee = $annee;
    $this->modele = $modele;
    $this->prix = $prix;
    $this->matricule = self::$count++;
}
abstract protected function demarrer();
abstract protected function accelerer();
//Utilistation de la méthode
public function __tostring(){
    return "Matricule : $this->matricule\nAnnée : $this->annee\nModèle : $this->modele\nPrix : $this->prix\n";    
}
//Tous les getter & setter
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
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

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



?>