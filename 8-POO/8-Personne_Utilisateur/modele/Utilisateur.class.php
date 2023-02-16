<?php

class Utilisateur extends Personne {

    //declare attributs
    private string $login;
    private string $password;
    private string $service;
    private Profil $_profil;

    //methode construct

    public function __construct($nom,$prenom,$mail,$tel,$salaire,$login,$password,$service,Profil $_profil)
    {
        parent::__construct($nom,$prenom,$mail,$tel,$salaire);
        $this -> login = $login;
        $this -> password = $password;
        $this -> service = $service;
        $this -> _profil = $_profil;
    }


    //methoce reaffectation salaire 
    public function calculerSalaire(){
        parent::calculSalaire();
        if ($this->_profil->getCode() == "MN") {
            $nvxsalaire = $this->salaire = $this->salaire * 1.1;
            return $nvxsalaire;
        }elseif ($this->_profil->getCode() == "DG") {
            $nvxsalaire = $this->salaire * 1.4;
            return  $nvxsalaire;
        }

    }


    //methode affiche 

    public function affiche() : void{
        parent::affiche();
        $nvxsalaire = $this->calculerSalaire();
        echo "le Nom complet est " . $this->nom ." ". $this->prenom . "\n" . "son numero est " . $this->tel ."\n" . "son mail : ". $this->mail ."\n" . "son salaire " . $nvxsalaire ."\n" ."il appartient au service : ". $this->service.".";

    }

   
    //methode get et set 

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
        return $this->_profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($_profil)
    {
        $this->_profil = $_profil;

        return $this;
    }
}

?>