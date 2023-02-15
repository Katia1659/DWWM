<?php

class Personne
{
    
    //on définit les attributs de la classe
    protected $id;
    protected $nom;
    protected $prenom;
    private static $incrementation = 0;
    protected $mail;
    protected $telephone;
    protected $salaire;


    //Constructeur d'initialisation
    public function __construct(string $prenom, string $nom, string $mail, string $telephone, float $salaire)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        self::$incrementation++;
        $this->id = self::$incrementation;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }

    //===================== Méthodes =====================

    //méthode pour afficher
    public function affiche(): void
    {
        echo "La personne se prénomme: ". strtoupper($this->nom). " ". ucfirst($this->prenom). ", a un salaire de: ". $this->salaire. PHP_EOL. "coordonnées: ". $this->mail. " / tel: ". $this->telephone;
    }

    //méthode pour calculer le salaire
    public function calclulerSalaire(): float{
                      
        return $this->salaire;
    }

    //===================== Méthodes d'accès =====================
}

?>