<?php
include_once "../modele/Abstract.class.php";


class Manager extends Personne{

    private $_service;

    public function __construct($nom,$prenom,$mail,$tel,$salaire,$_service)
    {
        parent::__construct($nom,$prenom,$mail,$tel,$salaire);
        $this->_service  = $_service;
    }



    public function calculerSalaireMN()
    {
        parent::calculerSalaire();
        $nvxsalaire = $this->salaire = $this->salaire * 1.35;
        return $nvxsalaire;
    }
   
    public function afficher() : void {
        $nom = strtoupper($this->nom);
        $prenom = ucwords($this->prenom);
        $nvxSalaire = $this->calculerSalaireMN();
        echo "le salaire du Manager ". $nom ." " . $prenom. " est : ". $nvxSalaire."€, son service est : ". $this->_service;
    }



    /**
     * Get the value of _service
     */ 
    public function get_service()
    {
        return $this->_service;
    }

    /**
     * Set the value of _service
     *
     * @return  self
     */ 
    public function set_service($_service)
    {
        $this->_service = $_service;

        return $this;
    }
}