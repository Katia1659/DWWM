<?php

Class Developpeur extends Personne {

    private string $specialite;


    public function __construct (string $nom,string $prenom,string $mail,string $telephone,float $salaire, string $specialite) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
    }




    public function calculerSalaire() {
        echo "Le salaire de base de ".$this->nom." ".$this->prenom." est ".$this->salaire."€\n";
        $this->salaire = $this->salaire * 1.20;
        echo "Le salaire après augmentation de ".$this->nom." ".$this->prenom." est ".$this->salaire."€\n";;
    } 

    public function affiche() {
        echo parent::affiche()." il est développeur ".$this->specialite."\n";
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