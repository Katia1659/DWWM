<?php

class Client{
    //on définit les attributs de la classe

    private $cin;
    private $nom;
    private $prenom;
    private $tel;

    //Constructeur d'initialisation
    public function __construct($cin, $nom, $prenom, $tel){
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    //===================== Méthodes =====================

    public function afficher(): string{
        $info = "CIN: ". $this->cin. PHP_EOL. "NOM: ". $this->nom. PHP_EOL. "Prénom: ". $this->prenom. PHP_EOL. "Tél: ". $this->tel;
        return $info;
    }


    //===================== Méthodes d'accès =====================     

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

?>