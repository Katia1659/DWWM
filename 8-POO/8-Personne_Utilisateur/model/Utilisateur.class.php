<?php
include_once "Profil.class.php";

class Utilisateur extends Personne
{
    //on définit les attributs de la classe
    private $login;
    private $password;
    private $service;
    private Profil $_profil;

    //Constructeur d'initialisation
    public function __construct($prenom, $nom, $mail, $telephone, $salaire,  string $login, string $password, string $service, Profil $_profil)
    {
        parent::__construct($prenom, $nom, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->_profil = $_profil;
    }

    //===================== Méthodes =====================

    //fonction pour afficher
    public function affiche(): void
    {
         parent::affiche();
        echo PHP_EOL. "identifiants: login: ". $this->login. " password: ". $this->password. " service: ". $this->service. PHP_EOL;
    }

    //fonction pour redéfinir le salaire
    public function calclulerSalaire(): float{
        if ($this->_profil->getCode() == "MN") {
            $nouveauSalaire = $this->salaire + ($this->salaire * (10/100));
            echo "Le salaire a été réajusté de 10%". PHP_EOL;
        }elseif ($this->_profil->getCode() == "DG") {
            $nouveauSalaire = $this->salaire + ($this->salaire * (40/100));
            echo "Le salaire a été réajusté de 40%". PHP_EOL;
        }else {
            $nouveauSalaire = $this->salaire;
        }
        $this->salaire = $nouveauSalaire;
        return $nouveauSalaire;
    }

    //===================== Méthodes d'accès =====================

    /**
     * Get the value of _profil
     */ 
    public function get_profil()
    {
        return $this->_profil;
    }
}
?>