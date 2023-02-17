<?php
include_once("Personne.Class.php");
Class Manager extends Personne{
private string $service;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite){
        parent::__construct($nom,$prenom,$mail,$telephone, $salaire);
        $this->service = $specialite;
    } 
	public function calculerSalaire() {
        return 1.35 * $this->salaire;
    }
    public function __toString(){
        $this->salaire = $this->calculerSalaire();

        return "Le salaire du manager $this->nom $this->prenom est de : ". "$this->salaire". " son service : $this->service". "\n" ;
    }
}