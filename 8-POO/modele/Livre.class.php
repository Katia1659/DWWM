<?php

class Livre
{

    public $titre;
    public $auteur;
    public $prix;

    public function Livre($titre, $auteur, $prix)
    {

        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }


    function afficher()
    {
      echo "Le titre : $this->titre, l'auteur : $this->auteur, le prix : $this->prix ";
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
