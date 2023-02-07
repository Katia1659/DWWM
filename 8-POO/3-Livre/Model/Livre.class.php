<?php 
//On définie la class Livre avec ses propriétés
Class Livre{
    private $titre;
    private $auteur;
    private $prix;

//On définie ses méthodes 

    public function __construct($titre,$auteur,$prix){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;        
    }

    public function affichage(){
        $titre = $this->getTitre();
        $auteur = $this->getAuteur();
        $prix = $this->getPrix();
        echo "Le Titre est $titre.\nL'Auteur est $auteur.\nLe Prix est $prix.";
        
    }
//Tous les getter/setter 
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

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }
}



?>