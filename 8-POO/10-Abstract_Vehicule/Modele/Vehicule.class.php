<?php 

abstract class Vehicule 
{ //ATTRIBUTS

    private string $matricule; 
    public static $compteur;
    private float $prix;
    private int $annee;

        //CONTRUCTION
    public function __construct(string $matricule, float $prix, int $annee){

        self:: $compteur++ ;
        $this -> matricule = self:: $compteur ;
        $this -> prix = $prix ;
        $this -> annee = $annee;

    }

    abstract function demarrer() : void ;

    abstract function accelerer() : void ;

    public function __toString () {
        echo "Le prix du véhicule est :  " . $this-> prix . "\nsortie en :  " . $this -> annee . " \nson matricule est : ". $this -> matricule;  
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
}


?>