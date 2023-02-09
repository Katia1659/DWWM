<?php

class Employe
{    //ATTRIBUTS
    private $_matricule;
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_dateEmbauche;
    private $_salaire;

    //CONTRUCTION
    public function __construct(int $matricule, string $nom, string $prenom,  $dateNaissance, $dateEmbauche, float $salaire)
    {
        $this->_matricule = $matricule;
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
        $this->_dateEmbauche = $dateEmbauche;
        $this->_salaire = $salaire;
    }

    //CALCUL DE L'AGE
    public function age() : string
    {
        $dateNaissance = $this->_dateNaissance;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
        return $diff->format('%y');
    }

    //CALCUL DE L'ANCIENNETE
    public function anciennete() : string
    {
        $dateEmbauche = $this->_dateEmbauche;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateEmbauche), date_create($aujourdhui));
        return $diff->format('%y');
    }

    //APPLICATION DE L'AUGMENTATION
    public function augmentationDuSalaire() : void
    {
        $ancienne = $this->anciennete();

        if ($ancienne < 5) {
            $this->_salaire = $this->_salaire + ($this->_salaire / 100 * 2);
        } elseif ($ancienne < 10) {
            $this->_salaire = $this->_salaire + ($this->_salaire / 100 * 5);
        } else {
            $this->_salaire = $this->_salaire + ($this->_salaire / 100 * 10);
        }
    }

    //AFFICHAGE DE L'EMPLOYE
    public function AfficherEmploye() : void
    {

        $age = $this->age();
        $ancienne = $this->anciennete();
        echo "Matricule : $this->_matricule\n
        Nom complet : $this->_nom $this->_prenom\n
        Age : $age\n
        Ancienneté : $ancienne\n
        Salaire : $this->_salaire\n
        ";
    }



    /**
     * Get the value of matrice
     */
    public function getMatrice()
    {
        return $this->_matricule;
    }

    /**
     * Set the value of matrice
     *
     * @return  self
     */
    public function setMatrice($_matricule)
    {
        $this->_matricule = $_matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

    /**
     * Get the value of dateEmbauche
     */
    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */
    public function setDateEmbauche($_dateEmbauche)
    {
        $this->_dateEmbauche = $_dateEmbauche;

        return $this;
    }

    /**
     * Get the value of Salaire
     */
    public function getSalaire()
    {
        return $this->_salaire;
    }

    /**
     * Set the value of Salaire
     *
     * @return  self
     */
    public function setSalaire($_salaire)
    {
        $this->_salaire = $_salaire;

        return $this;
    }
}
