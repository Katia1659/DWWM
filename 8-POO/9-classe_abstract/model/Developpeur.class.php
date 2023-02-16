<?php

//creation de la classe developpeur
class Developpeur extends Personne
{
    private string $_specialite;

    //on defini le constucteur

    public function __construct(string $nom, string $prenom, string $mail, string $telephone,float $salaire, string $_specialite )
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialite = $_specialite;
        
    }

    //methode calculer salaire
    public function calculerSalaire(){
        $this->salaire = $this->salaire *1.2;

    }

    //methode afficher
    public function afficher():string {
        $texte = PHP_EOL."Le salaire du développeur $this->nom $this->prenom est : $this->salaire €, sa spécialité : $this->_specialite ".PHP_EOL;
        return $texte;
    }

    /**
     * Get the value of _specialite
     */ 
    public function get_specialite()
    {
        return $this->_specialite;
    }

    /**
     * Set the value of _specialite
     *
     * @return  self
     */ 
    public function set_specialite($_specialite)
    {
        $this->_specialite = $_specialite;

        return $this;
    }
}
?>