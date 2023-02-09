<?php
//creation de la class
Class Employer{
    //creation des attributs 
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

    //creation de la methods construct
    function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    //creation de la methods pour calculer l'age
    public function age(){
        $am = explode('/', $this->dateNaissance);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;
    }
    //creation de la methods pour calculer l'encienneté
    public function anciennete(){
        $am = explode('/', $this->dateEmbauche);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;

    }
    //creation de la method pour l'augmentation de salaire
    public function augmentationDuSalaire(){
        if ($this->anciennete() < 5) {
            return $this->salaire*1.02;
            
        }
        if ($this->anciennete() < 10) {
            return $this->salaire*1.05;
            
        }
        else {
            return $this->salaire*1.10;
            
        }
    }
    //creation de la method afficher employé
    public function afficherEmployer(){

        //premiere affichage sans l'augmentation de salaire
        echo "Matricule : ".$this->matricule."\n";
        echo "Nom Complet : ".strtoupper($this->nom)." ".ucwords($this->prenom)."\n";
        echo "Age : ".$this->age()."\n";
        echo "Ancienneté : ".$this->anciennete()."\n";
        echo "salaire : ".$this->salaire."\n\n";

        echo "Apres application de l'augmentaion de salaire\n\n";

        //dexieme afficher avec l'augmentation de salaire 
        echo "Matricule : ".$this->matricule."\n";
        echo "Nom Complet : ".strtoupper($this->nom)." ".ucwords($this->prenom)."\n";
        echo "Age : ".$this->age()."\n";
        echo "Ancienneté : ".$this->anciennete()."\n";
        echo "salaire : ".$this->augmentationDuSalaire()."\n";

    }
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
}

?>