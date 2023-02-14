<?php

include_once "../Modele/Etudiant.class.php";

// On initialise la classe Filiere avec ses différents attributs
Class Filiere {

    public int $id;
    public static $compteurFiliere;
    private string $code;
    private string $libelle;

// On crée la méthode construct qui initialise les attributs de l'objet

    public function __construct(string $code, string $libelle) {
        self::$compteurFiliere++;
        $this->id = self::$compteurFiliere; 
        $this->code = $code;
        $this->libelle = $libelle;
    }

// On crée la méthode toString qui permet de convertir un objet en string

    public function __toString() {
        
        return "Filière ". $this->id." : ".$this->libelle."\n";
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

}