<?php

Class Livre {
    private $titre; 
    private $auteur;
    private $prix;


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

// Initialisation des attributs.
    public function __construct($titre, $auteur, $prix){
        $this -> titre = $titre ;
        $this -> auteur = $auteur ;
        $this -> prix = $prix ;
    }

// Creation des méthodes d'affichage
    public function afficher() {
        $titre = $this -> getTitre();
        $auteur = $this -> getAuteur();
        $prix = $this -> getPrix();
        echo "Le titre est : " . $titre . "\n" . "L'auteur est : " . $auteur . "\n" . "Le prix est : " . $prix ."\n";
        echo "Titre : " . $titre  . " Auteur : " . $auteur . " Prix : " . $prix."\n";
    }

    public function afficherDeux(){
        $titre = $this -> getTitre();
        $auteur = $this -> getAuteur();
        $prix = $this -> getPrix();
        echo "Titre : " . $titre  . ", Auteur : " . $auteur . ", Prix : " . $prix."\n";

}
}



?>