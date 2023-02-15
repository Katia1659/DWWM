<?php


// Création de l'objet et initialisation des attributs
Class Utilisateur extends Personne { 
    
    private string $login ;
    private string $password ; 
    private string $service;
    private Profil $profil;


    public function __construct(Profil $profil, $nom, $prenom, $mail, $tel, $salaire, $login, $password, $service)
    {
        parent :: __construct($nom, $prenom, $mail, $tel, $salaire);
        $this -> login = $login;
        $this -> password = $password;
        $this -> service = $service; 
        $this -> profil = $profil; 

    }

    // Creation des méthodes d'affichage et du calcul d'augmentation du salaire

    public function affiche () : void {
        echo parent :: affiche() . "\nLes données de connexion : \n". $this -> password. " / " . $this -> login." " . "\nService : ".$this -> service; 
    }

    public function calculerSalaire () {
        if ($this -> profil-> getLibelle() == "MANAGER") {
            $this -> salaire = $this -> salaire * 1.1 ;
            echo "Le salaire après augmentation est : " . $this-> salaire. "€"."\n";
       }
       elseif ($this -> profil ->getLibelle() == "DIRECTEUR GENERAL") {
        $this -> salaire = $this -> salaire * 1.4 ;
        echo "Le salaire après augmentation est : " . $this-> salaire. "€"."\n";
       } 

       
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


?>