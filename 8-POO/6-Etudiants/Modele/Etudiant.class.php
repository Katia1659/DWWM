<?php
include_once "../modele/Filiere.class.php";
class Etudiant
{ //ATTRIBUTS

    private $id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $filiere;
    public static $compteur;


    //CONTRUCTION
    public function __construct(string $nom, string $prenom, string $dateNaissance, object $filiere)
    {
        self::$compteur++;
        $this->id = self::$compteur++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->filiere = $filiere;
    }

    public function __toString()
    {
        return "Je suis l'étudiant ". $this->nom . " " .$this ->prenom ." ma date de naissance est : " . $this->dateNaissance . " \n";
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
