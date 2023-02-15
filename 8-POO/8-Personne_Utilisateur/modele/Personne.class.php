<?php

class Personne
{
    protected static $compteur = 0;
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire)
    {
        self::$compteur++;
        $this->id = self::$compteur;
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> mail = $mail;
        $this -> telephone = $telephone;
        $this -> salaire = $salaire;
    }

    public function calculerSalaire()
    {   

        return $this -> salaire;
            
    }

    

    public function affiche()
    {
        
        echo "Nom: " . $this -> nom;
        echo PHP_EOL;
        echo "Prenom: " . $this -> prenom;
        echo PHP_EOL;
        echo "mail: " . $this -> mail;
        echo PHP_EOL;
        echo "Téléphone: " . $this -> telephone;
        echo PHP_EOL;
        echo "Salaire: " . $this->salaire;
        echo PHP_EOL;

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

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
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
}