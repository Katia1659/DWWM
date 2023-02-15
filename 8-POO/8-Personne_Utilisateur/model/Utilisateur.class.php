<?php

//on defini la class Utilisateur et ses attributs
class Utilisateur extends Personne
{
    private string $login;
    private string $password;
    private string $service;
    private $profil;

    //on defini le constucteur

    public function __construct( string $login, string $password, string $service, string $nom, string $prenom, string $mail ,string $telephone, float $salaire,$profil)
    {
        parent::__construct( $nom, $prenom, $mail , $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    //on defini la methode calculerSalaire en fonction du service
    public function calculerSalaire(): float
    {
        if ($this->service == 'Manager') {
            $this->salaire = $this->salaire *1.1;
        }
        if ($this->service == 'Directeur général') {
            $this->salaire = $this->salaire *1.4;
        }
        return $this->salaire;
    }

    //on defini la methode afficher
    public function afficher():void {
        
         parent::afficher();
         echo PHP_EOL."►service : $this->service".PHP_EOL.PHP_EOL;
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