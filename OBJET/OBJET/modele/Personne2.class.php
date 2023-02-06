<?php
Class Personne{
    public $nom;
    public $prenom;
    public $dateNaiss;

    public function __construct ($nom, $prenom, $dateNaiss){
        echo "Bonjour!";
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;
    }

    public function marcher(){
        echo "Je marche";
    }
}

?>