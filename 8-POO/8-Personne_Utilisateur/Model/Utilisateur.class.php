<?php
include_once "../Model/Personne.class.php";
include_once "../Model/Profile.class.php";
//création de la class Utilisateur parenté a Personne
class Utilisateur extends Personne{
    //initialisation des attributs de la class
    private string $login;
    private string $password;
    private string $service;
    private Profile $profile;
//initialisation du constructeur de la class

    public function __construct($nom,$prenom,$mail,$tel,$salaire ,$login, $password,$service,$profile){
        parent::__construct($nom,$prenom,$mail,$tel,$salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;     
        $this->profile = $profile;   
    }
    //création de la méthode calculersalire permettant de calculer le salaire selon le poste
    
    public function calculerSalaire(){
        if ($this->service == "Manager") {
            return $this->salaire+($this->salaire*(10/100));
        }elseif ($this->service == "Directeur") {
            return $this->salaire+($this->salaire*(40/100));
        }else {
            return $this->salaire;
        }
    }
//création de la méthode affiche permettant l'affichage
    public function affiche(){
        $salaire = $this->calculerSalaire();
        $login = $this->login;
        $password = $this->password;
        $service = $this->service;
        $code = $this->profile->getCode();
        parent::affiche();
        echo "╠╬╣ Identifiant ► $login\n╠╬╣ Service ► $service\n╠╬╣ Code ► $code \n╠╬╣ Salaire ► $salaire\n";
    }
    //Tous les getter & setter

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
     * Get the value of profile
     */ 
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set the value of profile
     *
     * @return  self
     */ 
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }
}



?>