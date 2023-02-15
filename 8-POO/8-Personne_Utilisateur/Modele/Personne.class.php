<?php

class Personne
{ //ATTRIBUTS
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;
    public static $compteur;

    //CONTRUCTION
    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        self::$compteur++;
        $this->id = self::$compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }

    // CALCUL DE SALAIRE 
    public function calculerSalaire()
    {
        return $this->salaire;
    }

    // AFFICHAGE DES INFORMATIONS 
    public function Affiche()
    {
        echo "PROFIL : \nnom : " . $this->nom . "\n" .
            "prenom : " . $this->prenom . "\n" .
            "mail : " . $this->mail . "\n" .
            "telephone : " . $this->telephone . "\n" .
            "salaire : " . $this->salaire . "\n";
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
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

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
     * Get the value of compteur
     */
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }
}
