<?php
include_once "Filiere.class.php";

class Etudiant{
    //on définit les attributs de la classe

    private static $code = 0;
    private int $id;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private Filiere $_filiere;

    //Constructeur d'initialisation
    public function __construct($prenom, $nom, $dateNaissance, $_filiere){
        self::$code++;
        $this->id = self::$code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->_filiere = $_filiere;
    }


    //===================== Méthodes =====================

    //fonction pour afficher
    public function __toString(): string{
        $afficher = "Je suis l'étudiant ". $this->prenom. " ". $this->nom. " ma date de naissance est: ". $this->dateNaissance. PHP_EOL;
        return $afficher;
    }

    //===================== Méthodes d'accès =====================

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Get the value of _filiere
     */ 
    public function get_filiere()
    {
        return $this->_filiere;
    }
}

?>