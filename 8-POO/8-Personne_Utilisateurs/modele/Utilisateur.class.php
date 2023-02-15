<?php

class Utilisateur extends Personne
{
    private $login;
    private $password;
    private $service;
    private $profil;

    public function __construct(string $nom, string $prenom, $mail, $telephone, $salaire, $login, $password, $service, $profil)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    public function calculerSalaire()
    {
        if ($this->profil->getLibelle() == "Manager") 
        {
            return 1.1 * $this->salaire;
        }
        if ($this->profil->getLibelle() == "Directeur général") 
        {
            return 1.4 * $this->salaire;
        } 
        else 
        {
            return parent::calculerSalaire();
        }
    }


    // Redéfinition de la méthode affiche héritée
    public function affiche()
    {
        echo
        parent::affiche() .
            "\n Le poste occupé : " . $this->profil->getLibelle() .
            "\n Le salaire : " . $this->calculerSalaire()."\n";
    }
    /**
     * Get the value of profil
     */
    public function getProfil()
    {
        return $this->profil;
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
}
