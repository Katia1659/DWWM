<?php

/**
 * 
 * Classe développeur 
 */

 class Manager extends Personne
 {
    private string $service;

    /**
     * 
     * Constructeur classe Manager
     */
    public function __construct(string $nom,string $prenom,string $mail,string $telephone,int $salaire,string $service)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail=$mail;
        $this->telephone=$telephone;
        $this->salaire=$salaire;
        $this->service=$service;
    }

    /**
     * 
     * Methode Affiche de la classe Manager
     * @return void
     */

    public function affiche():void
    {
        echo "le salaire du Manageur ".$this->nom." ".$this->prenom
        ." est : ".$this->salaire." €. \n"
        ."Service: ".$this->service."\n";
    }

    /**
     * 
     * Redifintion de la methode calculerSalaire du class Personns
     * @return float
     */

    public function calculerSalaire(): float
    {
        return $this->salaire+= $this->salaire*0.35;
    }


    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
 }