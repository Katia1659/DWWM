<?php

class Utilisateur extends Personne
{ //ATTRIBUTS
    private $login;
    private $password;
    private $service;
    private $profil;

    //CONTRUCTION
    public function __construct(string $login, string $password, string $service, string $nom, string $prenom, string $mail, string $telephone, float $salaire, $profil)
    {
        parent::__construct($nom, $prenom,  $mail,  $telephone,  $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    // CALCUL DE SALAIRE 
    public function Affiche()
    {
        $role = $this->profil;
        echo parent::Affiche() .
            "login : " . $this->login . "\n" .
            "password : " . $this->password . "\n" .
            "service : " . $this->service . "\n" .
            "role : " . $role->getLibelle() . "\n";
    }

    // AFFICHAGE DES NOMS ET PRENOMS DES MANAGERS 
    public function __toString()
    {
        return $this->nom . " " . $this->prenom . " est manager \n";
    }

    //CALCUL DES AUGMENTATIONS EVENTUELLES 
    public function calculerSalaire()
    {
        if ($this->profil->getLibelle() == "DG") {

            $this->salaire = $this->salaire  + ($this->salaire * 40 / 100);
        } elseif ($this->profil->getLibelle() == "MN") {

            $this->salaire = $this->salaire  + ($this->salaire * 10 / 100);
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
