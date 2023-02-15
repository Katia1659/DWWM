<?php

class Personne {

    //attributs
    protected $id;
    protected $nom;
    protected $prenom;

    //methode construct 
    public function __construct($nom,$prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    //methode toSting
    public function __toString()
    {
        return "je suis " . $this->nom ." ". $this->prenom;
    }



    //get et set attributs

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
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}









?>