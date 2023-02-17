<?php


abstract class Vehicule {
  private static $matricule = 100;
  private $annee_modele;
  private $prix;

  public function __construct($annee_modele, $prix) {
    self::$matricule++;
    $this->annee_modele = $annee_modele;
    $this->prix = $prix;
  }
  
  abstract public function demarrer();
  abstract public function accelerer();

  public function __toString() {
    return "Matricule : " . self::$matricule . ", Année de modèle : " . $this->annee_modele . ", Prix : " . $this->prix . " euros";

  }


  public function getMatricule() {
    return self::$matricule;
  }

  public function getAnneeModele() {
    return $this->annee_modele;
  }

  public function getPrix() {
    return $this->prix;
  }

  public function setAnneeModele($annee_modele) {
    $this->annee_modele = $annee_modele;
  }

  public function setPrix($prix) {
    $this->prix = $prix;
  }


}