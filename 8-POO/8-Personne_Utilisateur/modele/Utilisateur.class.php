<?php
include_once "Profile.class.php";

/**
 * Class Utilisateur
 */
class Utilisateur extends Personne
{
    private string $login;
    private string $password;
    private string $service;
    private Profile $profile;

    /**
     * 
     * Constructeur Utilisateur
     */
    public function __construct(string $nom, string $prenom, string $mail, string $telephone, string $salaire, string $login, string $password, string $service, Profile $profile)
    {
        parent :: __construct( $nom,  $prenom,  $mail, $telephone,$salaire);
        $this->login=$login;
        $this->password=$password;
        $this->service=$service;
        $this->profile=$profile;

    }

    /**
     * Methode affiche()
     * @return void
     */
    public function affiche(): void
    {
        echo "--------------PROFIL Utilisateur---------"
             .parent::affiche()."\n"
             ." Service : ".$this->service."\n"
             ." poste : ".$this->profile->getLibelle()."\n"
             ."-----------------------------------------"; 
    }

    /**
     * 
     * Methode calculerSalaire()
     * @return float
     */

     public function calculerSalaire():float
     {
        if($this->profile->getLibelle() === "Manager")
        {
           return $this->salaire = $this->salaire + $this->salaire*0.10;
        }
        elseif($this->profile->getLibelle() === "Directeur générale")
        {
           return $this->salaire = $this->salaire + $this->salaire*0.40; 
        }
        else
        {
            return parent::calculerSalaire();
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