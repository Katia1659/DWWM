<?php

class Personne
{
    
    //on définit les attributs de la classe
    protected $id;
    protected $nom;
    protected $prenom;
    private static $incrementation = 0;

    //Constructeur d'initialisation
    public function __construct(string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        self::$incrementation++;
        $this->id = self::$incrementation;
    }

    //===================== Méthodes =====================

    public function __toString()
    {
        return "La personne se prénomme: ". strtoupper($this->nom). " ". ucfirst($this->prenom);
    }

    //===================== Méthodes d'accès =====================
}

?>