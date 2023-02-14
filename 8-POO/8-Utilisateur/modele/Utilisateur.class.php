<?php


include_once '../modele/Profil.class.php';

class Utilisateur extends Personne
{
   
    protected String $login;
    protected String $password;
    protected String $service;
  


public function __construct($login,$password,$service,$nom, $prenom,$mail,$telephone,$salaire)
{

    parent::__construct($nom, $prenom,$mail,$telephone,$salaire);

    

    $this->login = $login;
    $this->password = $password;
    $this->service = $service;

}

public function calculerSalaire() {

    if ($this->service == 'MN') {

    return 100*10/$this->salaire;

    }

    if($this->service == 'DG') {

    return    100*40/$this->salaire;

    }
}

public function affiche() {



do {

    switch ($choix) {
        case 'CP':
            echo "Vous êtes ".$this->nom." ".$this->prenom;
            echo "Votre adresse e-mail est :".$this->mail;
            echo "Votre adresse téléphone est :".$this->telephone;
            echo "Vous avez un salaire de ".$this->salaire;

            case 'MN':
                echo "Vous êtes ".$this->nom." ".$this->prenom;
                echo "Votre adresse e-mail est :".$this->mail;
                echo "Votre adresse téléphone est :".$this->telephone;
                echo "Vous avez un salaire de ".$this->salaire;

                case 'DP':
                    echo "Vous êtes ".$this->nom." ".$this->prenom;
                    echo "Votre adresse e-mail est :".$this->mail;
                    echo "Votre adresse téléphone est :".$this->telephone;
                    echo "Vous avez un salaire de ".$this->salaire;

                    case 'DRH':
                        echo "Vous êtes ".$this->nom." ".$this->prenom;
                        echo "Votre adresse e-mail est :".$this->mail;
                        echo "Votre adresse téléphone est :".$this->telephone;
                        echo "Vous avez un salaire de ".$this->salaire;

                        case 'DG':
                            echo "Vous êtes ".$this->nom." ".$this->prenom;
                            echo "Votre adresse e-mail est :".$this->mail;
                            echo "Votre adresse téléphone est :".$this->telephone;
                            echo "Vous avez un salaire de ".$this->salaire;

    }

}
while($choix != 'OUT');
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
