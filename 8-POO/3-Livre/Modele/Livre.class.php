<?php

// On crée une classe Livre avec trois attributs

Class Livre {
    private $titre;
    private $auteur;
    private $prix; 

// On crée la méthode construct qui initialise les attributs de l'objet


    public function __construct($titre, $auteur, $prix)  { 
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

// On crée une méthode qui affiche les caractéristiques du ou des livres

    public function afficher()
    {
        echo "Le titre est ".$this->titre."\n";
        echo "L'auteur est ".$this->auteur."\n";
        echo "Le prix est ".$this->prix."\n";
        echo "Titre : " .$this->titre. ", Auteur : ". $this->auteur.", Prix : ". $this->prix."\n";
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
}