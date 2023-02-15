<?php

/**
 * 
 * Classe développeur 
 */

 class Developpeur extends Personne
 {
    private string $specialite;

    /**
     * 
     * Constructeur classe Developpeur
     */
    public function __construct(string $nom,string $prenom,string $mail,string $telephone,int $salaire,string $specialite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail=$mail;
        $this->telephone=$telephone;
        $this->salaire=$salaire;
        $this->specialite=$specialite;
    }

    /**
     * 
     * Methode Affiche de la classe Développeur
     * @return void
     */

    public function affiche():void
    {
        echo "le salaire du Developpeur ".$this->nom." ".$this->prenom
        ." est : ".$this->salaire." €. \n"
        ."Specialite: ".$this->specialite."\n";

    }

    /**
     * 
     * Redifintion de la methode calculerSalaire du class Personns
     * @return float
     */

    public function calculerSalaire(): float
    {
        return $this->salaire+= $this->salaire*0.2;
    }

    



    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
 }