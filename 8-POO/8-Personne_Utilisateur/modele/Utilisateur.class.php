<?php
//creation de la class utilisateur qui fait appel a la class parents Personne
class Utilisateur extends Personne{

    //creation des attributs
    private string $login;
    private string $password;
    private string $service;
    private Profil $Profil;

    //creation de la method construct 
    public function __construct(string $nom, string $prenom, string $mail,string $telephone, float $salaire,string $login,string $password, string $service,Profil $Profil)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->Profil = $Profil; 
    }

    //creation de la method affiche
    public function affiche(){
        $Profil = $this->Profil;
        echo parent::affiche()." ".$this->login." ".$this->password." \n".$Profil->getLibelle()."\n\n";
    }

    //creation de la method calculerSalaire
    public function calculerSalaire(){
        $Profil = $this->Profil;
        if ($Profil->getLibelle()=="Manager (MN)") {
            $nvSalaire = parent::calculerSalaire();
            $nvSalaire = $nvSalaire*1.1;
            echo "Son nouveau salaire est de ".$nvSalaire."\n"."\n";
        }elseif ($Profil->getLibelle()=="Directeur général (DG)") {
            $nvSalaire = parent::calculerSalaire();
            $nvSalaire = $nvSalaire*1.4;
            echo "Son nouveau salaire est de ".$nvSalaire."\n"."\n";
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
     * Get the value of Profil
     */ 
    public function getProfil()
    {
        return $this->Profil;
    }

    /**
     * Set the value of Profil
     *
     * @return  self
     */ 
    public function setProfil($Profil)
    {
        $this->Profil = $Profil;

        return $this;
    }
}

?>