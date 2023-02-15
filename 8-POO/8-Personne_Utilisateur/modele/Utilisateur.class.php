<?php


include_once '../modele/Profil.class.php';

class Utilisateur extends Personne
{
   
    private String $login;
    private String $password;
    private String $service;
    private Profil $profil;

    public static $compteur = 1;
    protected int $id;

public function __construct($login,$password,$service,$profil,$nom, $prenom,$mail,$telephone,$salaire)
{

    parent::__construct($nom, $prenom,$mail,$telephone,$salaire);

    self::$compteur++;
    $this->id = self::$compteur;

    $this->login = $login;
    $this->password = $password;
    $this->service = $service;
    $this->profil = $profil; 

}

public function calculerSalaire() : float {

    if ($this->profil->getLibelle() == 'Manager') {

    return  $this->salaire*=1.10;
    
   

    }

    if($this->profil->getLibelle() == 'Directeur') {


    return  $this->salaire*=1.40;
    

    } 
    else {

        return $this->salaire;
    }
}

public function affiche():void  {

//Affiche info du profil
 parent::affiche()."\n";
 echo "Service: ".$this-> service."\n";
 echo "Poste: ".$this->profil->getLibelle()."\n";
 echo PHP_EOL;
 echo "+=+=+=+=+=+=+";
 echo PHP_EOL;

}

public function afficheManager() : void {

if ($this->profil->getLibelle() == 'Manager') {
    echo $this->affiche();
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
