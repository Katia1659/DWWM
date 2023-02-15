<?php

class Utilisateur extends Personne
{
    private $login;
    private $password;
    private $service;
    private profil $profil;
    
    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $profil)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire) ;
        $this -> login = $login;
        $this -> password = $password;
        $this -> service = $service;
        $this -> profil = $profil;
    }

    public function calculerSalaire()
    {
        
        if ($this  -> profil -> getLibelle() == "Manager") {
            return $this -> salaire *= 1.10;
        }elseif ($this -> profil -> getLibelle() == "Directeur général") {
            return $this -> salaire *= 1.40;
        }else
            return $this -> salaire;

    }

    public function afficheManager()
    {
        if ($this  -> profil -> getLibelle() == "Manager") {
            echo $this -> affiche();
        }
    }

    public function affiche()
    {
        return parent::affiche();

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