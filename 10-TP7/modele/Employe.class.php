<?php

class Employe
{
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;


public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire)
{
    $this -> matricule = $matricule;
    $this -> nom = $nom;
    $this -> prenom = $prenom;
    $this -> dateNaissance = $dateNaissance; 
    $this -> dateEmbauche = $dateEmbauche;
    $this -> salaire = $salaire;
}

public function afficherEmploye()
{
    echo PHP_EOL;
    echo "*****************************";
    echo PHP_EOL;
    echo "matricule: ".$this -> matricule;
    echo PHP_EOL;
    echo "Nom Complet: ".$this -> nom . ' '.$this -> prenom ;
    echo PHP_EOL;
    echo "age: ".$this -> age();
    echo PHP_EOL;
    echo "anciennté: ".$this -> anciennte();
    echo PHP_EOL;
    echo "salaire: ".$this -> salaire;
    echo PHP_EOL;
    echo "*****************************";
}

public function afficherEmploye1()
{
    echo PHP_EOL;
    echo "*****************************";
    echo PHP_EOL;
    echo "matricule: ".$this -> matricule;
    echo PHP_EOL;
    echo "Nom Complet: ".$this -> nom . ' '.$this -> prenom ;
    echo PHP_EOL;
    echo "age: ".$this -> age();
    echo PHP_EOL;
    echo "anciennté: ".$this -> anciennte();
    echo PHP_EOL;
    echo "salaire: ".$this -> augmentationDuSalaire();
    echo PHP_EOL;
    echo "*****************************";
}

public function age():int
{

    $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($this->dateNaissance), date_create($aujourdhui));
        return $diff->format('%y');

       

}

public function anciennte()
{
    // datetime permet de recuperer le nombre de seconde depuis l'heure unix, elle est utilisé pour trouver la date du jours
    $aujourdhui = new DateTime();
    // creer un autre datetime a partir de la date d'emploi
    $dateEmbauche = new DateTime($this->dateEmbauche);
    //calculer l'interval entre la date d'aujourd'hui et la date d'embauche 
    $interval = $aujourdhui->diff($dateEmbauche);
    return $interval->y;
    
}

public function augmentationDuSalaire()
{
    $anciennte = $this->anciennte();
    if ($anciennte < 5) {
        $this->salaire *= 1.02;
    } elseif ($anciennte < 10) {
        $this->salaire *= 1.05;
    } else {
        $this->salaire *= 1.1;
    }
    return $this -> salaire;
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

