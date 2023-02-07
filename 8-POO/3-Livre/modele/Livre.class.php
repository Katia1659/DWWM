<?php

//classe
class Livre 
{
    private $titre;
    private $auteur;
    private $prix;

    //Constructeur d'initialisation
    public function __construct($titre, $auteur, $prix){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }


    //===================== Méthodes =====================

    public function afficher(): string {
        $afficher = "Titre: ". $this->titre. PHP_EOL. "Auteur: ". $this->auteur. PHP_EOL. "Prix: ". $this->prix ;
        return $afficher;
    }


    //===================== Méthodes d'accès =====================


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
}


?>