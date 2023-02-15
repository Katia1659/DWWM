<?php

// On crée la classe Utilisateur qui hérite de la classe Personne

class Utilisateur extends Personne {
    private Profil $profil;
    private string $login;
    private string $password;
    private string $service;

// On crée la méthode construct qui initialise les attributs de l'objet, et les attributs de la classe parent

    public function __construct(Profil $profil,string $nom,string $prenom,string $mail,string $telephone,float $salaire, string $login, string $password, string $service) {
        $this->profil = $profil;
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
    }

// On crée la méthode calculerSalaire qui calcule le salaire après augmentation

    public function calculerSalaire() {
        if ($this->profil->getLibelle() == 'Manager') {
            $this->salaire = $this->salaire * 1.10;
            echo "Le nouveau salaire du ".$this->profil->getLibelle()." est de ". $this->salaire."€"."\n";
        }
        else if ($this->profil->getLibelle() == 'Directeur général'){
            $this->salaire = $this->salaire * 1.40;
            echo "Le nouveau salaire du ".$this->profil->getLibelle(). " est de ". $this->salaire."€"."\n";
        }
        else {
            echo "Le salaire du ".$this->profil->getLibelle()." est de ".$this->salaire."€"."\n";
        }
    }

// On crée la méthode affiche qui affiche les caractéristiques de la personne

    public function affiche() {
        echo parent::affiche()." il est ".$this->profil->getLibelle()." l'identifiant est ".$this->login." son service est : ".$this->service.".\n";
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}