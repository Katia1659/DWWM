<?php

//Créer la classe abstraite « Personne».
abstract class Personne{
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected int $telephone;
    protected float $salaire;

    private static $counter = 0;

    //constructeur creation
    public function __construct(int $id,string $nom,string $prenom,string $mail,int $telephone,float $salaire)
    {
        self::$counter++;
        $this->id = self::$counter;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }
    //methode calculer salaire
    abstract function calculerSalaire();
    
}



?>