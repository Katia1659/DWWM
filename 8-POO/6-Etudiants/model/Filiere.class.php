<?php

class Filiere{
    //on définit les attributs de la classe

    private static $incrementation = 0;
    private int $id;
    private string $code;
    private string $libelle;
    


    //Constructeur d'initialisation
    public function __construct($code, $libelle){
        self::$incrementation++;
        $this->id = self::$incrementation;
        $this->code = $code;
        $this->libelle = $libelle;
    }


    //===================== Méthodes =====================

    //fonction pour afficher
    public function __toString(): string{
        $afficher = "Filière: ". $this->libelle. PHP_EOL;
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }
}

?>