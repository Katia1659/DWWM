<?php

Class Livre{
    private $titre;
    private $auteur;
    private $prix;

    public function __construct($titre, $auteur, $prix){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    public function afficherLivre():void{
        $titre = $this->getTitre();
        $auteur = $this->getAuteur();
        $prix = $this->getPrix();
        echo $message = "Le titre est ".$titre."\n"."L'auteur est".$auteur."\n"."Le prix est".$prix;


    }

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