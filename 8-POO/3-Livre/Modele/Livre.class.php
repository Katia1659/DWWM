<?php

//creation d'une classe Point
Class Livre{

    //on defini les attributs de la classe
    private $titre;
    private $auteur;
    private $prix;

    //definition du constructeur
    public function __construct ($titre,$auteur,$prix){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    //on cree la fonction afficher livre
    public function afficherLivre():void{
        $titre = $this->getTitre();
        $auteur = $this->getAuteur();
        $prix = $this->getPrix();
        echo "Le titre est : $titre".PHP_EOL."L'auteur est : $auteur".PHP_EOL."Le prix est : $prix".PHP_EOL;

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