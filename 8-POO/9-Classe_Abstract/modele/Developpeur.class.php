<?php
include_once "../modele/Personne.class.php";

//Créer les classes «Developpeur»
Class Developpeur extends Personne{
    private string $_specialiste;
//constructeur
    public function __construct(string $_specialiste,int $id,string $nom,string $prenom,string $mail,int $telephone,float $salaire){
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialiste = $_specialiste;
    }
  //methode calculer salaire developpeur
    public function calculerSalaire()
    {
        return $this->salaire += ($this->salaire * 20/100);
    }
    //methode afficher
    public function affichage(){
        echo "Le salaire du développeur ". strtoupper($this->nom)." ".ucfirst($this->prenom)." est : ".$this->calculerSalaire().", sa spécialité :".strtoupper($this->_specialiste)."\n";
        
    }

}





?>