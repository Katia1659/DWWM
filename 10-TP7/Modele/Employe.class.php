<?php 

Class Employe{
    private $matricule ;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;


    // Initialisation des attributs.
    public function __construct(int $matricule , string $nom , string $prenom , string $dateNaissance , string $dateEmbauche , float $salaire)
    {   
        $this -> matricule = $matricule ;
        $this -> nom = $nom ;
        $this -> prenom = $prenom ;
        $this -> dateNaissance = $dateNaissance ;
        $this -> dateEmbauche = $dateEmbauche ;
        $this -> salaire = $salaire ; 
    }

    // methode de calcul de l'age
    public function age (){
        $am = explode('/', $this->dateNaissance);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;
    }

    // methode du calcul de l'ancienneté 
    public function anciennete (){
        $am = explode('/', $this->dateEmbauche);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;
    }

    // methode d'augmentation du salaire selon l'ancienneté 
    public function augmentationDuSalaire(){
        $sal = $this -> salaire;
        $embauche = $this -> dateEmbauche;
        $today = date("y-m-d");
        $diff = date_diff( date_create($embauche), date_create($today) ); 
        $diff = $diff->format('%y');
        if ($diff < 5 ) {
            $sal = $sal *1.02;
        } elseif ($diff < 10 && $diff > 5 ) {
            $sal = $sal *1.05;
        } else {
            $sal = $sal *1.10;
        }
        return $sal;
    }

    // Création de la méthode d'affichage
    public function afficherEmploye(){
 
        $matricule = $this -> matricule ;
        $nom = $this -> nom ;
        $prenom = $this -> prenom;
        $dateNaissance = $this -> age();
        $dateEmbauche = $this -> anciennete();
        $salaire = $this -> augmentationDuSalaire();

        echo "Matricule : " . $matricule . "\nNom complet : ". $nom . " ".$prenom. "\nAge : ".$dateNaissance. "\nAncienneté : " .$dateEmbauche . "\nSalaire : " .$this -> salaire ;

        echo "\n\nAprès application de l'augmentation de salaire \n\nMatricule : " . $matricule . "\nNom complet : ". $nom . " ".$prenom. "\nAge : ".$dateNaissance. "\nAncienneté : " .$dateEmbauche . "\nSalaire : " .$salaire; 

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
}

?>