<?php



Class Etudiants {

    private Filiere $filiere;
    public int $id;
    public static $compteurEtudiant;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;


    public function __construct(string $prenom, string $nom, string $dateNaissance, Filiere $filiere) {
            $this->filiere = $filiere;
            self::$compteurEtudiant++;
            $this->id = self::$compteurEtudiant; 
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = $dateNaissance;
    }


    public function __toString() : string {


        return $this->filiere. "Je suis l'étudiant " . $this->prenom ." ".$this->nom. " ma date de naissance est : ". $this->dateNaissance; 
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }
}