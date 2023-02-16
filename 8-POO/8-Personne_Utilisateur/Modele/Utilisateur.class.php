<<<<<<< HEAD
<?php 

class Utilisateur {
    private string $login;
    private string $password;
    private string $service;

    public function __construct () {
        
    }

=======
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
            $sal1 = parent :: calculerSalaire();
            $sal1 = $sal1 * 1.1 ;
            echo "Le salaire après augmentation est : " . $sal1. "€"."\n";
       }
       elseif ($this -> profil ->getLibelle() == "DIRECTEUR GENERAL") {
        $sal1 = parent :: calculerSalaire();
        $sal1 = $sal1 * 1.4 ;
        echo "Le salaire après augmentation est : " .$sal1. "€"."\n";
       } 
 
    }


>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1

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
<<<<<<< HEAD
}



=======

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


>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1
?>