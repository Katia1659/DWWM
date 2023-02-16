<?php
include_once "../modele/Abstract.class.php";


class Developpeur extends Personne{

    //attributs 
    private $_specialite;

    //methode contstruc class Dev
    public function __construct($nom,$prenom,$mail,$tel,$salaire,$_specialite)
    {
      parent::__construct($nom,$prenom,$mail,$tel,$salaire);
      $this->_specialite = $_specialite;
    }

    // methode calcul salaire Dev
    public function calculerSalaireDev()
    {
        parent::calculerSalaire();
        $nvxSalaire = $this->salaire = $this->salaire * 1.2;
        return $nvxSalaire;
    }

    // methode afficher Dev type string
    public function afficher() :string {
        $nom = strtoupper($this->nom);
        $prenom = ucwords($this->prenom);
        $nvxSalaire = $this->calculerSalaireDev();
        return "le salaire du Developpeur ". $nom ." " . $prenom. " est : ". $nvxSalaire."€, sa specialité est : ". $this->_specialite;
    }


    // get et set attributs

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


   