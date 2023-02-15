<?php

class Profil
{
    //on définit les attributs de la classe
    private $id;
    private static $incrementation = 0;
    private $code;
    private $libelle;

    //Constructeur d'initialisation
    public function __construct(string $code, string $libelle)
    {
        self::$incrementation++;
        $this->id = self::$incrementation;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    

    //===================== Méthodes =====================

    //===================== Méthodes d'accès =====================


    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }
}

?>