<?php


abstract class Personne
{
    
    //on définit les attributs de la classe
    protected $id;
    protected $nom;
    protected $prenom;
    public static $counter = 0;
    protected $mail;
    protected $telephone;
    protected $salaire;


    //Constructeur d'initialisation
    public function __construct()
    {
        self::$counter++;
        $this->id = self::$counter;
    }

    //===================== Méthodes =====================
    
    
    //méthode pour calculer le salaire
    abstract public function calclulerSalaire();     
    
    //méthode pour afficher
    abstract public function afficher();
       
    

    //===================== Méthodes d'accès =====================
}

?>