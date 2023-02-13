<?php

class Filiere {
    private static $id_filiere = 0;
    private $id;
    private $nom;

    public function __construct($nom) {
        self::$id_filiere++;
        $this->id = self::$id_filiere;
        $this->nom = $nom;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function __toString() {
        return "Filière : " . $this->nom;
    }
}