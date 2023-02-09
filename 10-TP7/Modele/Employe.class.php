<?php

// On crée une classe Employe

Class Employe {
        private string $matricule;
        private string $nom;
        private string $prenom;
        private $dateNaissance;
        private $dateEmbauche;
        private $salaire;

// On crée la méthode construct qui initialise les attributs de l'objet

        public function __construct(float $matricule, string $nom, string $prenom, string $dateNaissance, string $dateEmbauche, $salaire)
        {
            $this->matricule = $matricule;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = $dateNaissance;
            $this-> dateEmbauche = $dateEmbauche;
            $this->salaire = $salaire;
        }

// On crée la méthode age qui calcule l'âge de la personne en fonction de sa date de naissance et de la date du jour        


        public function age() 
        {
            $aujourdhui = date("Y/m/d");
            $diff = date_diff(date_create($this->dateNaissance), date_create($aujourdhui));
            echo $diff->format('%y');
        }

// On crée la méthode anciennete qui calcule l'ancienneté de la personne en fonction de sa date d'embauche et de la date du jour

        public function anciennete() 
        {
            $aujourdhui = date("Y/m/d");
            $diff1 = date_diff(date_create($this->dateEmbauche), date_create($aujourdhui));
            echo $diff1->format('%y');
        }

// On crée la méthode augmentationDuSalaire qui augmente le salaire de l'employé en fonction de son ancienneté


        public function augmentationDuSalaire($salaire) 
        {   
            $aujourdhui = date("Y-m-d");
            $diff1 = date_diff(date_create($this->dateEmbauche), date_create($aujourdhui));
            $anciennete = $diff1->format('%y');

            if ($anciennete < 5) {
                $salaire = $this->salaire * 1.02;
            } else if ($anciennete < 10) {
                $salaire = $this->salaire * 1.05;
            } else if ($anciennete >= 10) {
                $salaire = $this->salaire * 1.10;

            }
            echo "Salaire : ";
            echo $salaire."\n \n";
            }

// On crée la méthode afficheEmploye qui affiche les données de l'employé avant et après augmentation du salaire

        public function afficheEmploye($employe) 
        {

            $nomMaj = strtoupper ($this->nom);
            $prenomMajMin =  ucfirst ($this->prenom);

            echo "Matricule : ".$this->matricule. "\n";
            echo "Nom complet : ".$nomMaj." ".$prenomMajMin. "\n";
            echo "Age : ";
            echo $employe->age()."\n";
            echo "Ancienneté : ";
            echo $employe->anciennete()."\n";
            echo "Salaire : ".$this->salaire."\n \n";

            echo "Après application de l'augmentation du salaire \n \n";

            echo "Matricule : ".$this->matricule. "\n";
            echo "Nom complet : ".$nomMaj." ".$prenomMajMin. "\n";
            echo "Age : ";
            echo $employe->age()."\n";
            echo "Ancienneté : ";
            echo $employe->anciennete()."\n";
            echo $employe->augmentationDuSalaire($this->salaire)."\n";
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