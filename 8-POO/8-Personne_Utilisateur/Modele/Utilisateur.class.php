<?php
include_once "../modele/Profil.class.php";
class Utilisateur extends Personne
{ //ATTRIBUTS
    private $login;
    private $password;
    private $service;

    //CONTRUCTION
    public function __construct(string $login, string $password, string $service,string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        parent::__construct( $nom, $prenom,  $mail,  $telephone,  $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
    }

    public function __toString()
    {
        return " ";
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