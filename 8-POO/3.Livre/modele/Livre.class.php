<?php
class Livre{
	private $titre;
    private $auteur;
	private $prix;

public function __construct($titre, $auteur, $prix){

	$this->titre = $titre;
	$this->auteur = $auteur;
	$this->prix = $prix;
}

public function afficher(){

	echo "Nom du livre :"." $this->titre \n";
	echo "Nom de l'auteur :"." $this->auteur \n";
	echo "Prix :"." $this->prix \n\n" ;

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
