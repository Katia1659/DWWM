<?php 

class Employe 
{

    private int $matricule;
    private String $nom;
    private String $prenom;
    private String $dateNaissance;
    private String $dateEmbauche;
    private int $salaire;


    public function __construct($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    
public function age($dateNaissance) 
{
    $dateNaissance = $this->dateNaissance;
    $aujourdhui = date("Y/m/d");
    $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
    return intval($diff->format('%y'));
}

public function anciennete($dateEmbauche)
{
    $dateEmbauche = $this->dateEmbauche;
    $aujourdhui = date("Y/m/d");
    $diff = date_diff(date_create($dateEmbauche), date_create($aujourdhui));
    return intval($diff->format('%y'));
}

public function augmentationDuSalaire($dateEmbauche)
{
    if ($this->anciennete($dateEmbauche)<5) {
        $salaire = (2*$this->salaire)/100;
        return $salaire;
    }

    if ($this->anciennete($dateEmbauche)<10) {
        $salaire = (5*$this->salaire)/100;
        return $salaire;
    } else {
        $salaire = (10*$this->salaire)/100;
        return $salaire;
    }
}

public function afficherEmploye($dateEmbauche,$dateNaissance)
{
 
    echo "Matricule : ".$this->matricule."\n";
    echo "Nom complet : ".$this->nom." ".$this->prenom."\n";
    echo "Age : ".$this->age($dateNaissance)."\n";
    echo "Ancienneté : ".$this->anciennete($dateEmbauche)."\n";
    echo "Salaire : ".$this->augmentationDuSalaire($dateEmbauche)."€"."\n";


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