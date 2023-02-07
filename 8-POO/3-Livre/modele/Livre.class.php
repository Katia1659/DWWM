<?php

class Rectangle
{
    // Initalisation des attributs
    private $titre;
    private $auteur;
    private $prix;
    private $devise;

    public function __construct( $titre, $auteur, $prix, $devise){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
        $this->devise = $devise;
    }

    /**
     * @return mixed
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * @param mixed $devise
     */
    public function setDevise($devise): void
    {
        $this->devise = $devise;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur): void
    {
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    //Methode qui permet d'afficher les infos du livre.
    public function afficher(){
        $titre = $this->getTitre();
        $auteur = $this->getAuteur();
        $prix = $this->getPrix();
        $devise = $this->getDevise();

        echo "Titre : $titre \n";
        echo "Auteur : $auteur \n";
        echo "Prix : $prix $devise \n";
    }
}