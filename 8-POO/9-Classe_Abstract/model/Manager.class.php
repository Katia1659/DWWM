<?php
include_once "Personne.class.php";

class Manager extends Personne
{
    //on définit les attributs de la classe
    private string $service;  

    //Constructeur d'initialisation
    public function __construct(string $prenom, string $nom, string $mail, string $telephone, float $salaire, string $service){
        parent::__construct();
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
        $this->service = $service;
    }

    //===================== Méthodes =====================

    //méthode pour calculer le salaire
    public function calclulerSalaire(): float{
        $nouveauSalaire = $this->salaire + ($this->salaire * (35/100));
        $this->salaire = $nouveauSalaire;
        echo "Le salaire a été réajusté de 35% \n";
        return $nouveauSalaire;
    } 

    //méthode pour afficher
    public function afficher(): string{
        $affiche = PHP_EOL. "Le manager se nomme :". ucfirst($this->prenom). " ". strtoupper($this->nom). PHP_EOL. "Identifants: id: ".$this->id. " mail: ". $this->mail. " tel: ". $this->telephone. PHP_EOL. "Travail: salaire: ". $this->salaire. " service: ". $this->service. PHP_EOL;
        return $affiche;
    }

    //===================== Méthodes d'accès =====================
}

?>