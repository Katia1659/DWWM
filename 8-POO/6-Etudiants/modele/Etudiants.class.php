<?php



class Etudiants {
    private static $id_etudiant = 0;
    private $id;
    private $nom;
    private $date_naissance;
    private $filiere;

    public function __construct($nom, $date_naissance, $filiere) {
        self::$id_etudiant++;
        $this->id = self::$id_etudiant;
        $this->nom = $nom;
        $this->date_naissance = $date_naissance;
        $this->filiere = $filiere;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDateNaissance() {
        return $this->date_naissance;
    }

    public function getFiliere() {
        return $this->filiere;
    }

    public function __toString() {
        return "Je suis l'étudiant " . $this->nom . " ma date de naissance est : " . $this->date_naissance;
    }
}