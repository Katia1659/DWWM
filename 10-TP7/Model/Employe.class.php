<?php
//On définie la class Employe
class Employe{
    //On définie les attributs de la class Employe
    private int $matricule;
    private string $nom;
    private String $prenom;
    private string $dateNaiss;
    private string $dateEmbauche;
    private int $salaire;

//On initialise la class à l'aide de __construct
    public function __construct(int $matricule,string $nom,string $prenom,$dateNaiss,$dateEmbauche, float $salaire){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;        
    }
    //On définie la méthode age qui permet de déterminer l'age d'un employé par rapport à sa date de naissance;
    public function age():int{
        $dateNaiss = $this->getDateNaiss();
        $dateJour = date_create(date("d-m-Y"));
        $date = date_create($dateNaiss);
        $age = $date->diff($dateJour)->format('%y');
        return $age;
        // echo "$age\n";
    }
    //On définie la méthode anciennete qui permet de déterminer l'ancienneté d'un employé par rapport à sa date d'embauche
    public function anciennete():int{
        $dateEmbauche = $this->getDateEmbauche();
        $dateJour = date_create(date("d-m-Y"));
        $date = date_create($dateEmbauche);
        $ancien = $date->diff($dateJour)->format('%y');
        return $ancien;
        // echo "$ancien\n";
    }
    //On définie la méthode augmentationDuSalaire qui permet d'augmenter le salaire d'un employé par rapport à son ancienneté
    public function augmentationDuSalaire():float{
        $dateEmbauche = $this->getDateEmbauche();
        $salaire = $this->getSalaire();
        $anciennete = $this->anciennete();
        if ($anciennete<5) {
            $this->salaire += (2/100)*$salaire;
            return $salaire;
        }elseif ($anciennete<10 and $anciennete>=5) {
            $this->salaire += (5/100)*$salaire;
            return $salaire;
        }else {
            $this->salaire += (10/100)*$salaire;
            return $salaire;
        }
        return $salaire;
        
    }
    //On définie la méthode AfficherEmploye qui permet d'afficher la fiche d'un employé (récapitulatif)
    public function AfficherEmploye():void{
        $matricule = $this->getMatricule();
        $nom = $this->getNom();
        $prenom = $this->getPrenom();
        $age = $this->age();
        $anciennete = $this->anciennete();
        $salaire = $this->getSalaire();
        $prenom = strtolower($prenom);
        echo "╠╣► Fiche Employé : \n";
        echo "╠╣\n";
        echo "╠╣► Matricule : $matricule\n";
        echo "╠╣► Nom Complet : ".strtoupper($nom)." ".ucfirst($prenom)."\n";
        echo "╠╣► Âge : $age ans\n";
        echo "╠╣► Ancienneté : $anciennete an(s)\n";
        echo "╠╣► Salaire mensuel brut : $salaire €\n";
    }
    //Tous les getter & setter

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
}



?>