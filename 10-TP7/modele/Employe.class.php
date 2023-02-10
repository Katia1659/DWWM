<?php

class Employe{
    
    //on définit les attributs de la classe

    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

    //Constructeur d'initialisation
    public function __construct($matricule, $nom, $prenom,  $dateNaissance, $dateEmbauche, $salaire){
        $this->matricule = $matricule;
        $this->nom =$nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    //===================== Méthodes =====================

    //Fonction pour l age de l employé
    public function age(): int{
        $dateNaissance = $this->dateNaissance;
        $objetNaissance = date_create($dateNaissance);

        $aujourdhui = date_create(date("d-m-Y"));
        
        $age = $objetNaissance->diff($aujourdhui)->format ('%y');
        return $age;
    }

    //fonction pour l'ancienneté de l'employé
    public function anciennete(): int{
        $dateEmbauche = $this->dateEmbauche;
        $objetEmbauche = date_create($dateEmbauche);

        $aujourdhui = date_create(date("d-m-Y"));

        $anciennete = $objetEmbauche->diff($aujourdhui)->format ('%y');
        return $anciennete;
    }

    //fonction pour augmenter le salaire
    public function augmentationDuSalaire(): void{
        if($this->anciennete() < 5){
            $nouveauSalaire = $this->salaire + ($this->salaire * (2 / 100));
            $this->salaire = $nouveauSalaire ;
            echo "Le salaire a été réajusté de 2%". PHP_EOL ;
        }elseif (($this->anciennete() >= 5) && ($this->anciennete() < 10)) { 
            $nouveauSalaire = $this->salaire + ($this->salaire * (5 / 100));
            $this->salaire = $nouveauSalaire ;
            echo "Le salaire a été réajusté de 5%". PHP_EOL ;
        }else {
            $nouveauSalaire = $this->salaire + ($this->salaire * (10 / 100));
            $this->salaire = $nouveauSalaire ;
            echo "Le salaire a été réajusté de 10%". PHP_EOL ;
        }
        
    }

    //fonction pour afficher les informations sur l'employé

    public function AfficherEmployé(): string{
        $afficher = PHP_EOL. "*******************". PHP_EOL. "Matricule: ". $this->matricule. PHP_EOL. "Nom complet: ". strtoupper($this->nom). " ". ucfirst($this->prenom). PHP_EOL. "Age: ". $this-> age(). PHP_EOL. "Ancienneté: ". $this->anciennete(). PHP_EOL. "Salaire: ". $this->salaire. PHP_EOL. "*******************". PHP_EOL;
        return $afficher;
    }


    //===================== Méthodes d'accès ===================== 
    

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
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

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