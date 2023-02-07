<?php

class Livre{

    //declaration des atributs 
    private $prix;
    private $auteur;
    private $titre;

    public function __construct($prix, $titre, $auteur) {
        $this->prix = $prix;
        $this->titre = $titre;
        $this->auteur = $auteur;
    }

    //methode pour recuperer l'auteur 
    public function auteur() {
        $auteur = $this->getAuteur();
        return $auteur;
    }

    //methode pour recuperer le prix 
    public function prix() {
        $prix = $this->getPrix();
        return $prix;
    }

    // methode pour recuperer le titre 
    public function titre() {
        $titre = $this->getTitre();
        return $titre;
    }

	//get et set des attributs 

	/**
	 * @return mixed
	 */
	public function getPrix() {
		return $this->prix;
	}
	
	/**
	 * @param mixed $prix 
	 * @return self
	 */
	public function setPrix($prix): self {
		$this->prix = $prix;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTitre() {
		return $this->titre;
	}
	
	/**
	 * @param mixed $titre 
	 * @return self
	 */
	public function setTitre($titre): self {
		$this->titre = $titre;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAuteur() {
		return $this->auteur;
	}
	
	/**
	 * @param mixed $auteur 
	 * @return self
	 */
	public function setAuteur($auteur): self {
		$this->auteur = $auteur;
		return $this;
	}
}

?>