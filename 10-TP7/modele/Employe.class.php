<?php

class Employe{

    //declare attributs 
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaiss;
    private $dateEmbauche;
    private $salaire;

    //methode construct
    public function __construct($matricule,$nom,$prenom,$dateNaiss,$dateEmbauche,$salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }


    //methode 

    public function age() : int {

        $dateNaissance = $this->getDateNaiss();
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
        $diff = $diff -> format('%Y');
        
        return $diff;
    }
    
    public function anciennete() : int {

        $dateEmbauche = $this->getDateEmbauche();
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateEmbauche), date_create($aujourdhui));
        $diff = $diff->format('%Y');

        return $diff;

    }

    public function augmentSal() : float {

        $anciennete = $this->anciennete();
        $sal = $this->getSalaire();

        if ($anciennete < 5) {
            $sal = $sal * 1.02;
        }elseif ($anciennete < 10) {
            $sal = $sal * 1.05;
        }elseif ($anciennete > 10) {
            $sal = $sal * 1.10;
        }

        return $sal;
    }

    public function afficheEmploye() {

        $matricule = $this->matricule;
        $nom = strtoupper($this->nom);
        $prenom = ucwords($this->prenom);
        $age = $this->age();
        $anciennete = $this->anciennete();
        $salaire = $this->augmentSal();

        echo "le Matricule est : $matricule\nle nom prenom : $nom $prenom \nl'age : $age \nl'anciennetée est de $anciennete années\nle salaire est : $salaire";

    }

    //get et set attributs 

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaiss
     */ 
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @return  self
     */ 
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}




?>