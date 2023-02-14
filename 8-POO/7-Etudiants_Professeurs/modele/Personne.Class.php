<?php
include_once("Etudiant.Class.php");
//CREATION DE CLASS
Class Personne {
    protected int $id;
    protected string $nom;
    protected string $prenom;
    public static $compteur;
    
    public function __construct($id,$nom,$prenom){
        
        self::$compteur++;
        $this->id = self::$compteur;
        
        $this -> nom = $nom;
        $this -> prenom = $prenom;
    }

    public function __toString(){
        return "Je suis $this->nom $this->prenom";
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

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}