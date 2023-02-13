<?php

include "Filiere.class.php";

/**
 * Classe Etudiant
 */

class Etudiant
{
    private  $id;
    private  $nom;
    private  $prenom;
    private  $dateNaissance;
    private  $filiere;


    /**
     * Constructeur class Etudiant
     */

    public function __construct($nom, $prenom, $dateNaissance,$filiere)
    {
        $this->id++;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;
        $this->filiere=$filiere;
    }
    /**
     * Méthode toString()
     * @return string
     */

     public function __toString()
     {
      return "\t je suis l'etudiant ".$this->nom.",".$this->prenom." ma date de naissance est : ".$this->dateNaissance.".";
     }

     /**
      * Méthode equals
      * @return bool
      */

      public static function equals (Etudiant $etudiant, Filiere $filiere):bool
      {
        $filiereEtudiant = $etudiant->getFiliere();
        if ($filiereEtudiant->getLibelle() === $filiere->getLibelle())
        {
            return true;
        }
        else
        {
            return false;

        }
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