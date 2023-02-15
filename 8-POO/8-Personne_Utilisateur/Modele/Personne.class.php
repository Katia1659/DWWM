<?php

// On initialise la classe Personne avec ses différents attributs

class Personne {
    protected int $id;
    public static $compteur;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;

// On crée la méthode construct qui initialise les attributs de l'objet

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire) {
        self::$compteur++;
        $this->id = self::$compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this-> salaire = $salaire;
    }

// On crée la méthode calculerSalaire qui calcule le salaire après augmentation

    public function calculerSalaire() {

        return "Le salaire est de ".$this->salaire;
    }

// On crée la méthode affiche qui affiche les caractéristiques de la personne

    public function affiche() {
        echo "L'utilisateur s'appelle ". $this->nom. " ". $this->prenom." son adresse mail est : ".$this->mail." son numéro de téléphone est ".$this->telephone." son salaire est de ".$this->salaire."€";
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

    

    
