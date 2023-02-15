<?php

class Employe
{
    private $matricule;
    private $nom;
    private $prenom;
    private $date_Naisssance;
    private $date_Embauche;
    private $salaire;


    public function __construct($matricule, $nom, $prenom, $date_Naisssance, $date_Embauche, $salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_Naisssance = $date_Naisssance;
        $this->date_Embauche = $date_Embauche;
        $this->salaire = $salaire;
    }

    public function age(): string
    {
        $dateNaissance = $this->date_Naisssance;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
       return $diff->format('%y');
    }

     public function anciennete(): string
    {
        $dateNaissance = $this->date_Embauche;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
       return $diff->format('%y');
    }

    public function augmentationDuSalaire() : float
    {
        $ancienter=$this->anciennete();
        if ($ancienter > 10)
        {
            $this->salaire += $this->salaire*0.10;
            return $this->salaire;

        }
        elseif($ancienter < 10 && $ancienter >=5)
        {
            $this->salaire += $this->salaire*0.05;
            return $this->salaire;

        }
        else
        {
            $this->salaire += $this->salaire*0.02;
            return $this->salaire;
        }

    }

    public function afficherEmploye(): void
    {
        print "--------------------------------------\n";
        print "Matricule: ".$this->matricule."\n";
        print "NOM Complet: ".$this->nom." ".$this->prenom."\n";
        print "Age :".$this->age()."\n";
        print "Ancienneté: ".$this->anciennete()."\n";
        print " Salaire: ".$this->salaire."\n";

        print "-------Aprés Augmentation de Salaire------"."\n";
        print "Matricule: ".$this->matricule."\n";
        print "NOM Complet: ".$this->nom." ".$this->prenom."\n";
        print "Age :".$this->age()."\n";
        print "Ancienneté: ".$this->anciennete()."\n";
        print " Salaire: ".$this->augmentationDuSalaire()."\t";

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
     * Get the value of date_Naisssance
     */
    public function getDate_Naisssance()
    {
        return $this->date_Naisssance;
    }

    /**
     * Set the value of date_Naisssance
     *
     * @return  self
     */
    public function setDate_Naisssance($date_Naisssance)
    {
        $this->date_Naisssance = $date_Naisssance;

        return $this;
    }

    /**
     * Get the value of date_Embauche
     */
    public function getDate_Embauche()
    {
        return $this->date_Embauche;
    }

    /**
     * Set the value of date_Embauche
     *
     * @return  self
     */
    public function setDate_Embauche($date_Embauche)
    {
        $this->date_Embauche = $date_Embauche;

        return $this;
    }

    /**
     * Get the value of slaire
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of slaire
     *
     * @return  self
     */
    public function setSlaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}
