<?php

// On initialise la classe Client

    Class Client {
        private $cin;
        private $nom;
        private $prenom;
        private $tel;

// On crée la méthode construct qui initialise les attributs de l'objet

    public function __construct($cin, $nom, $prenom, $tel)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        }

// On crée la méthode afficher qui affiche les informations du client

    public function afficher()
 {
        echo "CIN : ". $this->cin."\n";
        echo "NOM : ". $this->nom."\n";
        echo "Prénom : ". $this->prenom."\n";
        echo "Tél : ". $this->tel."\n";
 }

 
    /**
     * Get the value of cin
     */ 
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */ 
    public function setCin($cin)
    {
        $this->cin = $cin;

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

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}