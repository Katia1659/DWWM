<?php

class Client
{

    private string $cin;
    private string $nom;
    private string $prenom;
    private int $tel;

    public function __construct($cin,$nom,$prenom,$tel)
{
    $this->cin = $cin;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->tel = $tel;
}

    public function afficher():void{
        $cin = $this->cin;
        $nom = $this->nom;
        $prenom = $this->prenom;
        $tel = $this->tel;
        echo "CIN : $cin\nNom : $nom\nPrénom : $prenom\nTél : $tel\n";
    }

    


////////////////////////////getter and setter///////////////////////////
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